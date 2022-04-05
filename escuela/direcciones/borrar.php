<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM direcciones WHERE id = '$id'";
  $resultado = mysqli_query($conn, $query);
  mysqli_close($conn);
  if(!$resultado) {
   
    die("Query Failed");
  }

  $_SESSION['message'] = 'Datos borrados correctamente';
  $_SESSION['message_type'] = 'danger';
   header("Location: direcciones.php");
}

?>