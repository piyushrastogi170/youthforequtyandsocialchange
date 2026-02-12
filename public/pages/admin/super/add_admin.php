<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require dirname(__DIR__, 4) . "/database/connection.php";

/* -------- SUPER ADMIN ACCESS CHECK -------- */
if (!isset($_SESSION['admin_id']) || $_SESSION['role'] !== 'super_admin') {
    die("Unauthorized access");
}

/* -------- METHOD CHECK -------- */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Invalid request");
}

/* -------- INPUT SANITIZE -------- */
$name     = trim($_POST['name'] ?? '');
$email    = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');
$role     = trim($_POST['role'] ?? '');

if (!$name || !$email || !$password || !$role) {
    die("All fields are required");
}

/* -------- EMAIL VALIDATION -------- */
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format");
}

/* -------- PASSWORD MIN LENGTH -------- */
if (strlen($password) < 6) {
    die("Password must be at least 6 characters");
}

/* -------- ROLE VALIDATION -------- */
$allowedRoles = ['admin', 'super_admin'];

if (!in_array($role, $allowedRoles)) {
    die("Invalid role selected");
}

/* -------- DUPLICATE EMAIL CHECK -------- */
$check = $conn->prepare("SELECT id FROM admin WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$result = $check->get_result();

if ($result->num_rows > 0) {
    die("Email already exists");
}

/* -------- HASH PASSWORD -------- */
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

/* -------- INSERT ADMIN -------- */
$stmt = $conn->prepare("
    INSERT INTO admin (name, email, password, role, status) 
    VALUES (?, ?, ?, ?, 'active')
");

$stmt->bind_param("ssss", $name, $email, $hashedPassword, $role);

if ($stmt->execute()) {

    header("Location: admin_added_message.php");
    exit;

} else {
    echo "Error creating admin";
}
