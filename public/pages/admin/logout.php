<?php
session_start();

/* -------- Unset Session Variables -------- */
$_SESSION = [];

/* -------- Destroy Session -------- */
session_destroy();

/* -------- Redirect to Login -------- */
header("Location: ../admin_login.php");
exit;
