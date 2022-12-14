<?php
session_start();
require 'dbcon.php'

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Informations des étudiants</title>
  </head>
  <body>
    <div class="container mt-4">

        <?php 
          include('message.php');
        ?>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4> Informations des étudiants 
                <a href="student-create.php" class="btn btn-primary float-end">Ajouter</a>
              </h4>
            </div>
            <div class="card-body">

            <table class="table table-border table-striped">
              <thead>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Numéro téléphone</th>
                <th>Cours</th>
                <th>Action</th>
              </thead>
              <tbody>
                <?php 
                  $query = "SELECT * FROM students";
                  $query_run = mysqli_query($con, $query);

                  if(mysqli_num_rows($query_run) > 0)
                  {
                    foreach($query_run as $student)
                    {
                      ?>
                      <tr>
                        <td><?= $student['id'];?></td>
                        <td><?= $student['name'];?></td>
                        <td><?= $student['email'];?></td>
                        <td><?= $student['phone'];?></td>
                        <td><?= $student['course'];?></td>
                        <td>
                          <a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">Voir</a>
                          <a href="student-edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Editer</a>
                          <form action="code.php" method="POST" class="d-inline">
                            <button type="submit" name="delete" value="<?=$student['id'];?>" class="btn btn-danger btn-sm">Supprimer</button>
                          </form>
                        </td>
                      </tr>
                      <?php
                    }
                  }
                  else
                  {
                    echo "<h5> No record found</h5>";
                  }
                ?>
              </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>