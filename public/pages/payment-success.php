<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
error_reporting(E_ALL);

require dirname(__DIR__, 2) . "/database/connection.php";

$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    echo json_encode(["status" => "failed", "message" => "No data received"]);
    exit;
}

$payment_id = $data['razorpay_payment_id'] ?? '';
$order_id   = $data['razorpay_order_id'] ?? '';
$signature  = $data['razorpay_signature'] ?? '';
$fname      = $data['fname'] ?? '';
$lname      = $data['lname'] ?? '';
$email      = $data['email'] ?? '';
$mobile     = $data['mobile'] ?? '';
$amount     = intval($data['amount'] ?? 0);

if (!$payment_id || !$order_id || !$signature) {
    echo json_encode(["status" => "failed", "message" => "Missing payment data"]);
    exit;
}

/* VERIFY SIGNATURE */
$keySecret = "uQsWbSZAHuwheTMjwPCRkOop";

$generated_signature = hash_hmac(
    "sha256",
    $order_id . "|" . $payment_id,
    $keySecret
);

if ($generated_signature !== $signature) {
    echo json_encode(["status" => "failed", "message" => "Signature mismatch"]);
    exit;
}

/* SAVE TO DATABASE */
$stmt = $conn->prepare("
    INSERT INTO donations 
    (order_id, payment_id, fname, lname, email, mobile, amount) 
    VALUES (?, ?, ?, ?, ?, ?, ?)
");

$stmt->bind_param(
    "ssssssi",
    $order_id,
    $payment_id,
    $fname,
    $lname,
    $email,
    $mobile,
    $amount
);

$stmt->execute();

if ($stmt->affected_rows === 1) {
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "failed", "message" => "DB insert failed"]);
}
