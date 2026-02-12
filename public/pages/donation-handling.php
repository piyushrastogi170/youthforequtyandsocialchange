<?php
header('Content-Type: application/json');
ini_set('display_errors', 0);
error_reporting(0);

$keyId = "rzp_test_SEveBT3OylyZJW";
$keySecret = "uQsWbSZAHuwheTMjwPCRkOop";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(["status" => "failed", "message" => "Invalid request"]);
    exit;
}

$firstName = trim($_POST['f_name'] ?? '');
$lastName  = trim($_POST['l_name'] ?? '');
$email     = trim($_POST['email'] ?? '');
$mobile    = trim($_POST['mobile'] ?? '');
$amount    = intval($_POST['amount'] ?? 0);

if ($amount <= 0) {
    echo json_encode(["status" => "failed", "message" => "Invalid amount"]);
    exit;
}

$payload = [
    "amount" => $amount * 100,
    "currency" => "INR",
    "receipt" => "don_" . time(),
    "payment_capture" => 1
];

$ch = curl_init("https://api.razorpay.com/v1/orders");

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERPWD => $keyId . ":" . $keySecret,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($payload),
    CURLOPT_HTTPHEADER => ["Content-Type: application/json"]
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$order = json_decode($response, true);

if ($httpCode !== 200 || !isset($order["id"])) {
    echo json_encode([
        "status" => "failed",
        "message" => "Order creation failed"
    ]);
    exit;
}

echo json_encode([
    "status"   => "success",
    "order_id" => $order["id"],
    "amount"   => $amount,
    "key"      => $keyId
]);
