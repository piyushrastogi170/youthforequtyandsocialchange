<?php
session_start();
require dirname(__DIR__, 2) . "/database/connection.php";

/* ---------------- SESSION SECURITY ---------------- */
ini_set('session.cookie_httponly', 1);
ini_set('session.use_strict_mode', 1);

/* ---------------- METHOD CHECK ---------------- */
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Invalid request");
}

/* ---------------- CSRF CHECK ---------------- */
if (!isset($_POST['token'], $_SESSION['token']) ||
    !hash_equals($_SESSION['token'], $_POST['token'])) {
    die("CSRF validation failed");
}

unset($_SESSION['token']);

/* ---------------- INPUT ---------------- */
$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

if (!$email || !$password) {
    die("Invalid input");
}

/* ---------------- FETCH ADMIN ---------------- */
$stmt = $conn->prepare("SELECT id, password FROM admins WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!$user) {
    die("Invalid Credentials");
}

/* ---------------- VERIFY PASSWORD ---------------- */
if (!password_verify($password, $user['password'])) {
    die("Invalid Credentials");
}

/* ---------------- SUCCESS ---------------- */
session_regenerate_id(true);
$_SESSION['admin_id'] = $user['id'];

header("Location: admin/dashboard.php");
exit;
