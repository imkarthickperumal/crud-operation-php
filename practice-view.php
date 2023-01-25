<?php
require ('config/db_connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD Application | View Practices Details</title>
</head>
<body>
    
   <div class="container mt-5">
   <?php include('message.php'); ?>
    <div class="row">
        <div class="md-col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Practice Edit
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    
                <?php 
                // check id - yes or no
                if(isset($_GET['id'])){
                    $practicename_id = mysqli_real_escape_string($conn, $_GET['id']);
                    $query = "SELECT * FROM practicename WHERE id='$practicename_id' "; 
                    $query_run = mysqli_query($conn, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                         $practicename = mysqli_fetch_array($query_run);
                         ?>
                        <div class="mb-3">
                            <label>Practice Name</label>
                            <p class="form-control">
                               <?php echo ($practicename['name']);?>
                            </p>
                        </div>

                        <div class="mb-3">
                             <label>Practice Email</label>
                             <p class="form-control">
                               <?php echo ($practicename['email']);?>
                            </p>
                        </div>
                       
                        <div class="mb-3">
                            <label>Practice Phone</label>
                            <p class="form-control">
                               <?php echo ($practicename['phone']);?>
                            </p>
                        </div>

                        <div class="mb-3">
                            <label>Practice Speciality</label>
                            <p class="form-control">
                               <?php echo ($practicename['speciality']);?>
                            </p>
                        </div>
                     <?php
                    }
                    else {
                        echo "<h5>No Such Id Found</h5>";
                    }
                }
                ?>
               </div>
            </div>
        </div>
    </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

