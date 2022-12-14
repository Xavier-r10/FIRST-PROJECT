<?php
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Voir les informations</title>
  </head>

  <body>
    <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Voir toutes les informations
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?php 
                    if(isset($_GET['id']))
                    {
                        $student_id = mysqli_real_escape_string($con, $_GET['id']);
                        $query = "SELECT * FROM students WHERE id= '$student_id'";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            $student_id = mysqli_fetch_array($query_run);
                            ?>
                                    <div class="mb-3">
                                        <label>Votre nom :</label>
                                        <p class="form-control">
                                            <?=$student['name'];?>
                                        </p>
                                    </div><div class="mb-3">
                                        <label>Votre email :</label>
                                        <p class="form-control">
                                            <?=$student['email'];?>
                                        </p>
                                    </div><div class="mb-3">
                                        <label>Votre contact :</label>                                       
                                        <p class="form-control">
                                            <?=$student['phone'];?>
                                        </p>
                                    </div><div class="mb-3">
                                        <label>Cours :</label>                                      
                                        <p class="form-control">
                                            <?=$student['course'];?>
                                        </p>
                                    </div>
                            <?php
                        }
                        else
                        {
                            echo "<h4>No such id found</h4>";
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