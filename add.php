<?php 
  
  session_start();
  require ('config/db_connection.php');

  // check button click or not
  if(isset($_POST['save_practice'])){

    // adding input fields ($conn, input fields)
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $speciality = mysqli_real_escape_string($conn, $_POST['speciality']);

    // create sql 
    $query = "INSERT INTO practicename(name,email,phone,speciality) VALUES('$name','$email','$phone','$speciality')";

    $query_run = mysqli_query($conn, $query);

    // save the db check 
    if($query_run){
        $_SESSION['message'] = "Practice Centre Added Successfully";
        header("Location: add.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Practice Centre Not Added!";
        header("Location: add.php");
        exit(0);
    }

  }
?>