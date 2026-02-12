<?php
/* ---------------- ERROR MODE ---------------- */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

/* ---------------- DB CONNECTION ---------------- */
require dirname(__DIR__, 2) . "/database/connection.php";

/* ---------------- METHOD CHECK ---------------- */
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact.php");
    exit;
}

/* ---------------- INPUT SANITIZATION ---------------- */
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$mobile  = trim($_POST['mobile'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $message === '') {
    header("Location: contact.php");
    exit;
}

/* ---------------- INSERT DATA ---------------- */
try {

    $stmt = $conn->prepare(
        "INSERT INTO contacts (name, email, mobile, subject, message) 
         VALUES (?, ?, ?, ?, ?)"
    );

    $stmt->bind_param("sssss", $name, $email, $mobile, $subject, $message);
    $stmt->execute();

    /* Verify insert actually happened */
    if ($stmt->affected_rows === 1) {

        $stmt->close();
        $conn->close();

        header("Location: contact-thanks.php");
        exit;

    } else {
        die("Insert failed. No rows affected.");
    }

} catch (Exception $e) {

    /* REMOVE THIS IN PRODUCTION */
    die("Database Error: " . $e->getMessage());
}
