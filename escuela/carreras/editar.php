<?php

include ("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM carerras WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    if(mysqli_num_rows($result) == 1 ){
        $row = mysqli_fetch_array($result);
        $carrera = $row['carrera'];
        $turno = $row['turno'];
        
    }
}
if (isset($_POST['actualizar'])){
    
    $id = $_GET['id'];
    $carrera = $_POST['carrera'];
    $turno = $_POST['turno'];
    
    
    $query = "UPDATE carerras set carrera = '$carrera', turno = '$turno' WHERE id = '$id'";
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header("location: carreras.php");
}
if (isset($_POST['cancelar'])){
    
    header("location: carreras.php");
}
?>

<?php include("includes//header.php"); ?>

<div class="container p-4">
    <div class="row">
       <div class="col-md-4 mx-auto">
           <div class="card card-body">

               <form action="editar.php?id=<?php echo $_GET['id'];?>" method="POST">

               <div class="form-group">
                   <input type="text" name="carrera" value="<?php echo $carrera;?>"
                   class="form-control" placeholder="Actualiza la carrera" >
              </div>
              <div class="form-group">
                   <input type="text" name="turno" value="<?php echo $turno;?>"
                   class="form-control" placeholder="Actualizar el turno" >
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