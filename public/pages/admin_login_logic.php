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


/* ---------------- INPUT ---------------- */
$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

if (!$email || !$password) {
    die("Invalid input");
}

/* ---------------- FETCH ADMIN WITH ROLE ---------------- */
$stmt = $conn->prepare("SELECT id, password, role, status FROM admin WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!$user) {
    die("Invalid Credentials");
}

/* ---------------- CHECK STATUS ---------------- */
if ($user['status'] !== 'active') {
    die("Account suspended");
}

/* ---------------- VERIFY PASSWORD ---------------- */
if (!password_verify($password, $user['password'])) {
    die("Invalid Credentials");
}

/* ---------------- SUCCESS ---------------- */
session_regenerate_id(true);

$_SESSION['admin_id'] = $user['id'];
$_SESSION['role'] = $user['role'];



if ($user) {

    if (password_verify($password, $user['password'])) {

        session_regenerate_id(true);

        $_SESSION['admin_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['admin_name'] = $user['name'];

        /* ---------- REMEMBER ME START ---------- */
        if (!empty($_POST['remember'])) {

            $selector = bin2hex(random_bytes(8));
            $validator = bin2hex(random_bytes(32));

            $hashedValidator = hash('sha256', $validator);
            $expires = date('Y-m-d H:i:s', time() + (86400 * 30));

            $stmt = $conn->prepare("
                INSERT INTO remember_tokens (admin_id, selector, hashed_validator, expires)
                VALUES (?, ?, ?, ?)
            ");

            $stmt->bind_param("isss", 
                $user['id'],   // session se nahi, direct $user se lo
                $selector, 
                $hashedValidator, 
                $expires
            );
            $stmt->execute();

        }
        /* ---------------- ROLE BASED REDIRECT ---------------- */
if ($user['role'] === 'super_admin') {
    header("Location: admin/super/super_admin_dashboard.php");
} else {
    header("Location: admin/dashboard.php");
}
exit;

    } else {
        die("Invalid Credentials");
    }

} else {
    die("Invalid Credentials");
}
