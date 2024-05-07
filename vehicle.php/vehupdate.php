<?php
include 'connection.php';

// Check if the ID parameter is set in the URL
if(isset($_GET['id'])) {
    // Get the ID from the URL
    $id = $_GET['id'];

    // Get new form data
    $type = $_POST['type'];
    $brand = $_POST['brand'];
    $color = $_POST['color'];


    // Update location in Location table based on the ID and new values
    $query = "UPDATE vehicles SET type='$type', brand='$brand', color='$color' WHERE id=$id";

    if(mysqli_query($conn, $query)) {
        echo "Vehicle  updated successfully.";
        header("Location:readVehicleDet.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // ID parameter not found in URL
    echo "Error: ID parameter not set.";
}

mysqli_close($conn);
?>