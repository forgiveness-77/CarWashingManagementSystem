<?php
include 'connection.php';

if(isset($_POST['submit'])){
  //  $user_id = $_SESSION['user_id']; // Assuming you have the user's id stored in a session variable

    $address = $_POST['address'];
    $tel = $_POST['tel'];
    $user_id=$_POST['user_id'];

    $sql = "INSERT INTO user_address (user_id, address, contact_number) 
            VALUES ('$user_id', '$address', '$tel')";

    $result = $conn->query($sql);

    if($result === TRUE){
        echo "New Address Added Successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>