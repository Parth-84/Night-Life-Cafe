<?php
$username = "root";
$password = "";
$database = "cafe"; 
$hostname = "localhost"; //Server Name

$conn = mysqli_connect($hostname,$username,$password,$database);

if($conn){
    // echo 'Connection Successfull';
}
else{
    echo 'No Connection';
}
?>