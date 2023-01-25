<?php
    session_start();
    require ('config/db_connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD Application</title>
</head>
<body>
   
   <!-- Student Details Container -->

   <div class="container mt-5">
     
    <?php include('message.php');?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Practice Centre Details
                        <a href="practice-create.php" class="btn btn-primary float-end">Add Practice</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table">
                           <thead>
                              <tr>
                                <th>ID</th>
                                <th>Practice Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Speciality</th>
                                <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php 
                              $query = "SELECT * FROM practicename";
                              $query_run = mysqli_query($conn, $query);
                              // check record or not
                              if(mysqli_num_rows($query_run) > 0){
                                foreach($query_run as $practicename)
                                {
                                    // inside using html tags
                                    ?>
                                    <tr>
                                        <td><?php echo ($practicename['id'])?></td>
                                        <td><?php echo ($practicename['name'])?></td>
                                        <td><?php echo ($practicename['email'])?></td>
                                        <td><?php echo ($practicename['phone'])?></td>
                                        <td><?php echo ($practicename['speciality'])?></td>
                                        <td>
                                            <a href="practice-view.php?id=<?php echo($practicename['id'])?>" class="btn btn-info btn-sm">View</a>
                                            <a href="practice-edit.php?id=<?php echo($practicename['id'])?>" class="btn btn-success btn-sm">Edit</a>
                                            <form action="add.php" method="POST" class="d-inline">
                                              <button type="submit" name="delete_practice" value="<?php echo($practicename['id'])?>" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                   
                              }
                              else {
                                echo "<h5>No Record Found</h5>";
                              }
                              ?>
                           </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   </div>

   <!-- Bootstrap Bundle -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>