<?php
include 'connection.php'; // Include your database connection file

if(isset($_POST['submit'])){
    // Retrieve form data
    $user_id = $_POST['user_id'];
    $userLocation = $_POST['user_location'];
    $booking_date = $_POST['date'];
    $email = $_POST['email'];
    $username=['username'];
    $car_model = $_POST['model'];
    $user_plan = $_POST['user_plan'];

    // Insert data into the database
    $sql = "INSERT INTO bookings (email,address, car_model,user_id, booking_date, user_plan) 
            VALUES ('$email', '$userLocation', '$car_model', '$user_id', '$booking_date','$user_plan')";

    if(mysqli_query($conn, $sql)){
        echo "Booking added successfully";
        header("Location:../myDashboard/landing.html");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>