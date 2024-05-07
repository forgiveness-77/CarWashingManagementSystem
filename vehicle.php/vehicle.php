<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $user_id= $_POST['user_id'];
    $type = $_POST['type'];

    $brand = $_POST['brand'];

    $color = $_POST['color'];

    $sql = "INSERT INTO vehicles ( user_id, type , brand, color ) VALUES ('$user_id', '$type' , '$brand' , '$color') ";

    $result = $conn -> query($sql);

    if($result == TRUE){
        
        echo "Vehicle added successfully";
        header("Location:readVehicleDet.php");
    }
    else{
        echo "There is an error.";
    }

}

?>