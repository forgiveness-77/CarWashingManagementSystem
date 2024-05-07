<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'carWashing';

$conn = new mysqli( $servername, $username, $password, $dbname );

if(!$conn){
    echo "Connection failed!";
}
else{
    echo "Connection successful!<br>";
}
