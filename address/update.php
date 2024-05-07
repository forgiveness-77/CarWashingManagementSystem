<?php
include 'config.php';

// Check if the ID parameter is set in the URL
if(isset($_GET['id'])) {
    // Get the ID from the URL
    $id = $_GET['id'];

    // Get new form data
    $name = $_POST['name'];
    $address = $_POST['address'];
    $working_hours_start = $_POST['working_hours_start'];
    $working_hours_end = $_POST['working_hours_end'];

    // Update location in Location table based on the ID and new values
    $query = "UPDATE Location SET name='$name', address='$address', working_hours_start='$working_hours_start', working_hours_end='$working_hours_end' WHERE id=$id";

    if(mysqli_query($conn, $query)) {
        echo "Location updated successfully.";
        header('Location:../my_work/user_dashboard.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // ID parameter not found in URL
    echo "Error: ID parameter not set.";
}

mysqli_close($conn);
?>