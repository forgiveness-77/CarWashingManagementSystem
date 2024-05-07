<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT email, password FROM users WHERE email = '$email'";

    $result = $conn->query($sql);
    

    if ($result->num_rows > 0) {
        // User exists, check password
        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];

        if (password_verify($password, $storedPassword)) {
            // Password is correct
            // Redirect to the dashboard
            header("Location: ../Frontend/landing.html");
            exit();
        } else {
            // Password is incorrect
            echo "Incorrect password!";
        }
    } else {
        // User does not exist
        echo "User not found!";
    }

    $conn->close();
}
?>