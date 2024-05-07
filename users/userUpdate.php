<?php
include 'connection.php';

//check if the id parameter is set in the url
if(isset($_GET['id'])){
    //Get the id from the url
    $id = $_GET['id'];
    
    //get new form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    //update user in the admin table based on the id and new value
    $query = "UPDATE users SET fname='$fname',lname='$lname', email='$email', username='$username' , password='$password' WHERE id='$id' ;";
    $result = mysqli_query($conn, $query);

    if($result){
        echo "User updated successfully";
        header("Location:ReadPage.php");
    }else{
        echo "Error".mysqli_error($conn);
    }
}else{
    //Id parameter not found in URL
    echo "Error: Id parameter not set";
}


?>