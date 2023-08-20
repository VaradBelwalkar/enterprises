<?php
session_start();
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    // User is not authenticated, redirect or display error message
    header('Location: login.php'); // Redirect to the login page
    exit; // Stop further execution
}
?>