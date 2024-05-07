<?php
include 'connection.php'; // Include your database connection file
if (isset($_GET['id'])) {
    //Get the id from the url
    $id = $_GET['id'];

    // Retrieve form data
    $user_id = $_POST['user_id'];
    $booking_date = $_POST['booking_date'];
    $status = $_POST['status'];
    $user_plan = $_POST['user_plan'];

    echo "$user_plan";
    // Update data in the database
    $sql = "UPDATE bookings SET user_id='$user_id', booking_date='$booking_date', status='$status', user_plan='$user_plan' WHERE booking_id='$id';";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Booking updated successfully";
        header("Location:readBooks.php");
    } else {
        echo "Error updating booking: " . mysqli_error($conn);
    }
}