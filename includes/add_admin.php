<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

/* Correct Path */
include "../../../database/connection.php";

/* Check connection */
if (!isset($conn)) {
    die("Database connection not found");
}

$email = "tanzeem@yesc.in";
$password = password_hash("Tanzeem@12345", PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO admins (email, password) VALUES (?, ?)");

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("ss", $email, $password);
$stmt->execute();

echo "Admin Created Successfully";
