<?php
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
    <title>CRUD Application | Add Practices</title>
</head>
<body>
    
   <div class="container mt-5">
   <?php include('message.php'); ?>
    <div class="row">
        <div class="md-col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Practice Add
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="add.php" method="POST">

                        <div class="mb-3">
                            <label>Practice Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="mb-3">
                             <label>Practice Email</label>
                             <input type="email" name="email" class="form-control">
                        </div>
                       
                        <div class="mb-3">
                            <label>Practice Phone</label>
                            <input type="number" name="phone" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Practice Speciality</label>
                            <input type="text" name="speciality" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="save_practice" class="btn btn-primary">Save Practice Centre</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>