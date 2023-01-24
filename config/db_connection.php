<?php 
// connect to databse
$conn = mysqli_connect("localhost","root","","practice");
//check connection
if(!$conn){
    echo 'Database connection failed: ' . $mysqli_connect_error();
}
?>