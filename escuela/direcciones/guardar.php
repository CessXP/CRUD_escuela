<?php

include("db.php");

if (isset($_POST['guardar'])){
    $ID_A = $_POST['ID_Alumno'];
    $Nombre = $_POST['Nombre'];
    $Apellido_P = $_POST['ApellidoP'];
    $Apellido_M = $_POST['ApellidoM'];
    $ID_D = $_POST['ID_D'];
    $ID_C = $_POST['numeroe'];
    $numeroi = $_POST['numeroi'];
    $cp = $_POST['cp'];

    $query = "INSERT INTO direcciones(id,estado,alcaldia,colonia,calle,numeroe,numeroi,cp) 
    VALUES ('$ID_A', '$Nombre','$Apellido_P','$Apellido_M','$ID_D','$ID_C','$numeroi','$cp')";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
   
    if (!$result){
        
        $_SESSION['message'] = 'Error al guardar datos';
        $_SESSION['message_type'] = 'danger';
        header("Location: direcciones.php");
      
        die();
    }
    $_SESSION['message'] = 'Dato guardado correctamente';
    $_SESSION['message_type'] = 'success';
   header("Location: direcciones.php");
}

?>