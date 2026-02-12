<?php

$conn = require dirname(__DIR__) . "/database/connection.php";

$email = "tanzeem@yesc.in";
$password = password_hash("Tanzeem@admin0909", PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO admins (email, password) VALUES (?, ?)");
$stmt->bind_param("ss", $email, $password);

if ($stmt->execute()) {
    echo "Admin Created Successfully";
} else {
    echo "Insert Error: " . $stmt->error;
}
