<?php
include 'config.php';

// Get form data
$name = $_POST['name'];
$address = $_POST['address'];
$working_hours_start = $_POST['working_hours_start'];
$working_hours_end = $_POST['working_hours_end'];

// Insert data into Location table
$query = "INSERT INTO location (id,name, address, working_hours_start, working_hours_end) 
          VALUES ('','$name', '$address', '$working_hours_start', '$working_hours_end')";
if(mysqli_query($conn, $query)) {
    echo "Location added successfully.";
    header("Location:read.php");
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>