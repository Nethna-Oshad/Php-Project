<?php
// Start session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to login page or any other page after logout
header("Location: login.php"); // Replace "login.php" with the URL of your login page
exit;
?>
