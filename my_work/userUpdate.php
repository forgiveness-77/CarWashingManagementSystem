<?php
include 'db_connect';

//check if the id parameter is set in the url
if(isset($_GET['id'])){
    //Get the id from the url
    $id = $_GET['id'];
    
    //get new form data
    $fname = $_POST['first_name'];
    $sname = $_POST['last_name'];
    $email = $_POST['email'];
    $pnumber = $_POST['phone_number'];

    //update user in the admin table based on the id and new value
    $query = "UPDATE admin SET firstname='$fname',lastname='$sname', email='$email', phone_number='$pnumber' WHERE id='$id' ;";
    $result = mysqli_query($conn, $query);

    if($result){
        echo "Admin updated successfully";
    }else{
        echo "Error".mysqli_error($conn);
    }
}else{
    //Id parameter not found in URL
    echo "Error: Id parameter not set";
}


?>