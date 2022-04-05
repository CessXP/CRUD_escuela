<?php

include ("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM direcciones WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1 ){
        $row = mysqli_fetch_array($result);
        $nombre = $row['estado'];
        $apellidop = $row['alcaldia'];
        $apellidom = $row['colonia'];
        $direccion = $row['calle'];
        $carrera = $row['numeroe'];
        $numeroi = $row['numeroi'];
        $cp = $row['cp'];

        mysqli_close($conn);    
    }
}
if (isset($_POST['actualizar'])){
    
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $apellidop = $_POST['apellidop'];
    $apellidom = $_POST['apellidom'];
    $direccion = $_POST['direccion'];
    $carrera = $_POST['carrera'];
    $numeroi = $_POST['numeroi'];
    $cp = $_POST['cp'];
    
    $query = "UPDATE direcciones set estado = '$nombre', alcaldia = '$apellidop', colonia = '$apellidom', calle = '$direccion', numeroe = '$carrera', numeroi = '$numeroi' , cp = '$cp' WHERE id = '$id'";
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header("location: direcciones.php");
}
if (isset($_POST['cancelar'])){

    
    header("location: direcciones.php");
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
                   class="form-control" placeholder="Actualiza el estado" >
              </div>
              <div class="form-group">
                   <input type="text" name="apellidop" value="<?php echo $apellidop;?>"
                   class="form-control" placeholder="Actualiza la alcaldia - municipio" >
              </div>
              <div class="form-group">
                   <input type="text" name="apellidom" value="<?php echo $apellidom;?>"
                   class="form-control" placeholder="Actualiza la colonia" >
              </div>
              <div class="form-group">
                   <input type="text" name="direccion" value="<?php echo $direccion;?>"
                   class="form-control" placeholder="Actualiza la calle" >
              </div>
              <div class="form-group">
                   <input type="text" name="carrera" value="<?php echo $carrera;?>"
                   class="form-control" placeholder="Actualiza el número exterior" >
              </div>
              <div class="form-group">
                   <input type="text" name="numeroi" value="<?php echo $numeroi;?>"
                   class="form-control" placeholder="Actualiza el número interior" >
              </div>
              <div class="form-group">
                   <input type="text" name="cp" value="<?php echo $cp;?>"
                   class="form-control" placeholder="Actualiza el código postal" >
              </div>

              <button class="btn btn-success" name="actualizar">
                  Actualizar 
                </button>
                <button class="btn btn-danger" name="cancelar">
                  Cancelar 
                </button>
              </form>
                
<?php include("includes/footer.php");?>