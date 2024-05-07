<?php
session_start(); // Start session

// Include database connection
include 'db_connect.php';

// Get form data
$first_name = $_POST['first_name'];
$last_name= $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$_phone = $_POST['phone_number'];

// Hash the password
$hashed_password = md5($password);

// Insert user data into database
$query = "INSERT INTO admin (id, firstname, lastname, email,password, phone_number) VALUES ('','$first_name','$last_name','$email', '$hashed_password','$_phone')";
$result = mysqli_query($conn, $query);

if ($result) {
    // User registered successfully
    $_SESSION['message'] = "Signup successful! You can now login.";
    echo "user saved successfully";
    header("Location: loginUser.php"); // Redirect to login page
} else {
    // Error in registration
    $_SESSION['error'] = "Error: " . mysqli_error($conn);
    header("Location: signupUser.html"); // Redirect back to signup page
}

mysqli_close($conn); // Close database connection
?>
