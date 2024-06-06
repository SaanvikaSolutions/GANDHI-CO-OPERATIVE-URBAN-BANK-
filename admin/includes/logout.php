<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If not logged in, redirect to index.php or any other appropriate page
    header("Location: login.php");
    exit;
}

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the index page with a logout message
echo "<script>alert('successfully logged out.'); window.location.href='login.php';</script>";
exit;
?>
