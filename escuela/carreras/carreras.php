<?php include("db.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela CRUD Carreras</title>
    <!-- Bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="/index.php" class="navbar-brand">Carreras</a> 
    </div>

</nav>

<div class="container p-4">

  <div class="row">
      <div class="col-md-4">
          <?php if(isset($_SESSION['message'])){ ?>
           <div class="alert alert-<?=$_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
           <?= $_SESSION['message'] ?>
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
    
         <?php session_unset(); } ?>

         

      <div class="card card-body">
          <form action="guardar.php" method="POST">
              <div class="form-group">
                  <input type="text" name="ID_Alumno" class="form-control"
                  placeholder="ID de Carrera (CXXXX)" autofocus>
              </div>
              <div class="form-group">
                <input type="text" name="Nombre" class="form-control"
                placeholder="Carrera" autofocus>
              </div>
              <div class="form-group">
              <?php $query = "SELECT * FROM turno";
                   $result = mysqli_query($conn, $query);
                   mysqli_close($conn);
                   ?>
                   
                   <select name="Turno" class="form-control">
                   <?php
                    while ($row = mysqli_fetch_array($result)) {
                      echo "<option value='" . $row['id'] . "'>" . $row['turno'] . "</option>";
                     }
                        ?> 
                    </select> 
              </div>
              <input type="submit" class="btn btn-success btn-block" name="guardar"
              value="Guardar">
          </form>
      </div>

      </div>

      <div class="col-md-6">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Carrera</th>
                    <th>Carrera</th>
                    <th>ID Turno</th>
                    <th>Acciones</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php 
                $query = "SELECT * FROM carerras";
                $results = mysqli_query($conn, $query);
                mysqli_close($conn);
                while($row = mysqli_fetch_array($results)){ ?>
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['carrera']?></td>
                        <td><?php echo $row['turno']?></td>
                        
                        <td> 
                            <a href="editar.php?id=<?php echo $row['id'];?>" class="btn btn-secondary">
                                Editar
                            </a>

                            <a href="borrar.php?id=<?php echo $row['id'];?>" class="btn btn-danger">
                                Borrar
                            </a>
                        </td>  
                    </tr>

                
                
                <?php } ?>
            </tbody>
          </table>

        


      </div>
  </div>

</div>

<?php 

include("includes/footer.php") ?>