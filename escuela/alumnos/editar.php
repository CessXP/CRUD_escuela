<?php

include ("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM Alumnos WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1 ){
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $apellidop = $row['apellidop'];
        $apellidom = $row['apellidom'];
        $direccion = $row['direccion'];
        $carrera = $row['carrera'];
        
    }
    mysqli_close($conn);
}
if (isset($_POST['actualizar'])){
    
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $apellidop = $_POST['apellidop'];
    $apellidom = $_POST['apellidom'];
    $direccion = $_POST['direccion'];
    $carrera = $_POST['carrera'];
    
    $query = "UPDATE Alumnos set nombre = '$nombre', apellidop = '$apellidop', apellidom = '$apellidom', direccion = '$direccion', carrera = '$carrera' WHERE id = '$id'";
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header("location: alumnos.php");
}
if (isset($_POST['cancelar'])){
    
    header("location: alumnos.php");
}
?>

<?php include("includes//header.php"); ?>

<div class="container p-4">
    <div class="row">
       <div class="col-md-4 mx-auto">
           <div class="card card-body">

               <form action="editar.php?id=<?php echo $_GET['id'];?>" method="POST">

               <div class="form-group">
                   <input type="text" name="nombre" value="<?php echo $nombre;?>"
                   class="form-control" placeholder="Actualiza el nombre" >
              </div>
              <div class="form-group">
                   <input type="text" name="apellidop" value="<?php echo $apellidop;?>"
                   class="form-control" placeholder="Actualiza el apellido paterno" >
              </div>
              <div class="form-group">
                   <input type="text" name="apellidom" value="<?php echo $apellidom;?>"
                   class="form-control" placeholder="Actualiza el apellido materno" >
              </div>
              <div class="form-group">
                   <input type="text" name="direccion" value="<?php echo $direccion;?>"
                   class="form-control" placeholder="Actualiza el ID de Direccion" >
              </div>
              <div class="form-group">
                   <input type="text" name="carrera" value="<?php echo $carrera;?>"
                   class="form-control" placeholder="Actualiza el ID de Carrera" >
              </div>

              <button class="btn btn-success" name="actualizar">
                  Actualizar 
                </button>
                <button class="btn btn-danger" name="cancelar">
                  Cancelar 
                </button>
              </form>
                
<?php 

include("includes/footer.php");?>