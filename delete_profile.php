<?php
session_start();
// Database connection
include 'connect.php'; 

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    // Delete user's profile data
    $sql = "DELETE FROM user WHERE Email='$email'";
    if (mysqli_query($conn, $sql)) {
        echo "Profile data deleted successfully.";
        // Destroy session and redirect to login page
        session_destroy();
        header("Location: login.php");
        exit();
    } else {
        echo "Error deleting profile data: " . mysqli_error($conn);
    }
} else {
    header("Location: login.php");
    exit();
}

mysqli_close($conn);
?>
