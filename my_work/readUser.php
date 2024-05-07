<?php
include 'db_connect.php';

// Select all locations from Location table
$query = "SELECT * FROM admin";
$result = mysqli_query($conn, $query);


if(isset($_POST['delete_id'])){
    $id  = $_POST['delete_id'];
   deleteUser($id);
}
// Check if there are any records
if(mysqli_num_rows($result) > 0) {
    // Display locations
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id'] . "<br>";
        echo "First name: " . $row['firstname'] . "<br>";
        echo "Last_name: " . $row['lastname'] . "<br>";
        echo "User email: " . $row['email'] . "<br>";
        echo "PHone_number: " . $row['phone_number'] . "<br>";
        
        // Update button with onclick event to redirect to updating page
        echo "<form id='updateForm" . $row['id'] . "' action='updateUser.php' method='post'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<input type='button' value='Update' onclick='redirectToUpdatePage(" . $row['id'] . ")'>";
        echo "</form>";
        
        // Delete button
        echo "<form action='read.php' method='post'>";
        echo "<input type='hidden' name='delete_id' value='" . $row['id'] . "'>";
        echo "<input type='submit')' value='Delete'>";
        echo "</form>";
        
        echo "<hr>";
    }
} else {
    echo "No locations found.";
}
function deleteUser($id){
    global $conn;
    $sql = "DELETE FROM admin WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "user Deleted successfully";
        header('Location:readUser.php');
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
    form.action = 'updateUser.php?id=' + id;
    form.submit();
}
</script>