<?php
// Start the session
session_start();

// NOTE: This is a simple, insecure authentication check for demonstration purposes.
// For a real application, you must:
// 1. Store passwords securely (e.g., using password_hash()).
// 2. Authenticate against a database (e.g., MySQL).
// 3. Use prepared statements to prevent SQL injection.

// Hardcoded username and password
$valid_username = 'rohan';
$valid_password = '123'; // In a real app, this should be a hashed password

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit;
    } else {
        $_SESSION['login_error'] = 'Invalid username or password.';
        header("Location: login.php");
        exit;
    }
} else {
    // If the page is accessed directly, redirect to login page
    header("Location: login.php");
    exit;
}
