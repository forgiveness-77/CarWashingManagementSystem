<?php
include 'connection.php'; // Include your database connection file

if (isset($_GET['id'])) {
    // Get the id from the URL
    $id = $_GET['id'];

    // Retrieve data for the specified booking
    $sql = "SELECT * FROM bookings WHERE booking_id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $user_id = $row['user_id'];
        $booking_date = $row['booking_date'];
        $status = $row['status'];
        $user_plan = $row['user_plan'];
    } else {
        echo "Booking not found.";
        exit; // Exit script if booking not found
    }
} else {
    echo "Invalid booking ID.";
    exit; // Exit script if no booking ID provided
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Booking</title>
</head>

<body>
    <form action="" method="post">
        User ID: <input type="text" name="user_id" value="<?php echo $user_id; ?>"><br>
        Booking Date: <input type="date" name="booking_date" value="<?php echo $booking_date; ?>"><br>
        Status: <input type="text" name="status" value="<?php echo $status; ?>"><br>
        User Plan: <input type="text" name="user_plan" value="<?php echo $user_plan; ?>"><br>
        <button type="submit" name="update">Update Booking</button>
    </form>
</body>

</html>

<?php
// Handle form submission for updating booking
if (isset($_POST['update'])) {
    // Retrieve form data
    $user_id = $_POST['user_id'];
    $booking_date = $_POST['booking_date'];
    $status = $_POST['status'];
    $user_plan = $_POST['user_plan'];

    // Update data in the database
    $sql = "UPDATE bookings SET user_id='$user_id', booking_date='$booking_date', status='$status', user_plan='$user_plan' WHERE booking_id='$id';";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Booking updated successfully";
        header("Location: readBooks.php"); // Redirect to booking list page after successful update
        exit;
    } else {
        echo "Error updating booking: " . mysqli_error($conn);
    }
}
?>