<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit("Invalid request");
}

$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

if ($email === '' || $password === '') {
    exit("Invalid input");
}

$pdo = require dirname(__DIR__, 2) . "/database/connection.php";

$stmt = $pdo->prepare("SELECT id, password FROM admins WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user || !password_verify($password, $user['password'])) {
    sleep(1);
    exit("Invalid Credentials");
}

session_regenerate_id(true);
$_SESSION['admin_id'] = $user['id'];

header("Location: admin/dashboard.php");
exit;
