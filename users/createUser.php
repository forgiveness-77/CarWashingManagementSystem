<?php
include 'connection.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT );
    $username = $_POST['username'];
  
    // Insert data into the database
    $sql = "INSERT INTO users (id,fname, lname, email, password, username) VALUES ('','$fname', '$lname', '$email', '$password', '$username')";
      echo $fname;
      $result = $conn->query($sql);
      echo $result;
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location:../FrontEnd/login.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>