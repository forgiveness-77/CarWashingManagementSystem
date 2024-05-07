<?php
include 'connection.php';
// Select all locations from Location table
$query = "SELECT * FROM bookings";
$result = mysqli_query($conn, $query);

//handle if delete button is clicked
if(isset($_POST['delete_id'])){
    $id  = $_POST['delete_id'];
   deleteUser($id);
}
// Check if there are any records
if(mysqli_num_rows($result) > 0) {
    // Display locations
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['booking_id'] . "<br>";
        echo "User_id: " . $row['user_id'] . "<br>";
        echo "vehicle_id: " . $row['vehicle_id'] . "<br>";
        echo "booking_date" . $row['booking_date'] . "<br>";
        echo "Status" . $row['status'] . "<br>";
        echo "User_plan" . $row['user_plan'] . "<br>";

        
        // Update button with onclick event to redirect to updating page
        echo "<form id='updateForm" . $row['booking_id'] . "' action='realUpdate.php' method='post'>";
        echo "<input type='hidden' name='id' value=' ". $row['booking_id'] ." '>";
        echo "<input type='button' value='Update' onclick='redirectToUpdatePage(" . $row['booking_id'] . ")'>";
        echo "</form>";

        
        // Delete button
        echo "<form action='readBooks.php' method='post'>";
        echo "<input type='hidden' name='delete_id' value='" . $row['booking_id'] . "'>";
        echo "<input type='submit' value='Delete'>";
        echo "</form>";
        echo "<hr>";
    }
} else {
    echo "No locations found.";
}
function deleteUser($id){
    global $conn;
    $sql = "DELETE FROM bookings WHERE booking_id=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "book Deleted successfully";
        header('Location:readBooks.php');
    }else{
        echo "Failed to delete the record";
    }
}
mysqli_close($conn);
?>
<script>
function redirectToUpdatePage(id) {
    // Redirect to updating page with the location ID
    var form = document.getElementById('updateForm' + id);
    form.action = 'realUpdate.php?id=' + id;
    form.submit();
}
</script>