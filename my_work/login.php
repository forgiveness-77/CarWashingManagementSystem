<?php
session_start(); // Start session

// Include database connection
include 'db_connect.php';

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];
$hash = md5($password);
// Check if username or email exists in users table
$query = "SELECT * FROM admin WHERE email='$email'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    // User found, verify password
    $row = mysqli_fetch_assoc($result);
    if ($hash===$row['password']) {
        // Password is correct, start session and set cookie
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        
        // Set a cookie for username to remember user
        setcookie('username', $row['username'], time() + (86400 * 30), "/"); // 86400 = 1 day
        
        header("Location: user_dashboard.php"); // Redirect to user dashboard
    } else {
        // Incorrect password
        $_SESSION['error'] = "Incorrect password";
        header("Location: loginUser.php"); // Redirect back to login page
    }
} else {
    // User not found
    $_SESSION['error'] = "User not found";
    header("Location: login_user.html"); // Redirect back to login page
}

mysqli_close($conn); // Close database connection
?>