<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize Inputs
    $firstName = htmlspecialchars(trim($_POST['f_name']));
    $lastName  = htmlspecialchars(trim($_POST['l_name']));
    $mobile    = htmlspecialchars(trim($_POST['mobile']));
    $email     = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $amount    = intval($_POST['amount']);

    // Basic Validation
    if (empty($firstName) || empty($email) || $amount <= 0) {
        die("Invalid submission.");
    }

    // Example: Print Data (For Testing)
    echo "<h2>Donation Received</h2>";
    echo "Name: " . $firstName . " " . $lastName . "<br>";
    echo "Mobile: " . $mobile . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Amount: ₹" . $amount . "<br>";

    
} else {
    header("Location: donation.php");
    exit();
}

?>
