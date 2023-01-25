<?php 
  
  session_start();
  require ('config/db_connection.php');
  
  // Delete flow
  if(isset($_POST['delete_practice']))
{
  $practicename_id = mysqli_real_escape_string($conn, $_POST['practicename_id']);

    $query = "DELETE FROM practicename WHERE id='$practicename_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Practice Centre Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Practice Centre Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

  // Update flow
  if(isset($_POST['update_practice']))
{
    $practicename_id = mysqli_real_escape_string($conn, $_POST['practicename_id']);

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $speciality = mysqli_real_escape_string($conn, $_POST['speciality']);

    $query = "UPDATE practicename SET name='$name', email='$email', phone='$phone', speciality='$speciality' WHERE id='$practicename_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Practice Centre Update Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Practice Centre Not Updated!";
        header("Location: index.php");
        exit(0);
    }

}
  // innsert flow
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
        header("Location: practice-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Practice Centre Not Added!";
        header("Location: practice-create.php");
        exit(0);
    }

  }
?>