<?php
session_start();

/* -------- Ensure Only Super Admin Can Access Logout -------- */
if (!isset($_SESSION['admin_id']) || $_SESSION['role'] !== 'super_admin') {
    header("Location: ../../admin_login.php");
    exit;
}

/* -------- Unset All Session Variables -------- */
$_SESSION = [];

/* -------- Destroy Session Cookie -------- */
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}
if (isset($_COOKIE['remember_token'])) {

    list($selector) = explode(':', $_COOKIE['remember_token']);

    $stmt = $conn->prepare("DELETE FROM remember_tokens WHERE selector = ?");
    $stmt->bind_param("s", $selector);
    $stmt->execute();

    setcookie("remember_token", "", time() - 3600, "/");
}


/* -------- Destroy Session -------- */
session_destroy();

/* -------- Redirect To Login -------- */
header("Location: ../../admin_login.php");
exit;
