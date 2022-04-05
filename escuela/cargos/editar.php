<?php

include ("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM cargo WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1 ){
        $row = mysqli_fetch_array($result);
        $cargo = $row['cargo'];
        
    }
    mysqli_close($conn);
}
if (isset($_POST['actualizar'])){
    
    $id = $_GET['id'];
    $cargo = $_POST['cargo'];
    
    
    $query = "UPDATE cargo set cargo = '$cargo' WHERE id = '$id'";
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header("location: cargos.php");
}
if (isset($_POST['cancelar'])){
    
    header("location: cargos.php");
}
?>

<?php include("includes//header.php"); ?>

<div class="container p-4">
    <div class="row">
       <div class="col-md-4 mx-auto">
           <div class="card card-body">

               <form action="editar.php?id=<?php echo $_GET['id'];?>" method="POST">

               <div class="form-group">
                   <input type="text" name="cargo" value="<?php echo $cargo;?>"
                   class="form-control" placeholder="Actualiza el cargo" >
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