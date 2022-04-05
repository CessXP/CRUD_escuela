<?php

include("db.php");

if (isset($_POST['guardar'])){
    $ID_A = $_POST['ID_Alumno'];
    $Nombre = $_POST['Nombre'];
    

    $query = "INSERT INTO cargo(id,cargo) 
    VALUES ('$ID_A', '$Nombre')";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
   
    if (!$result){
        $_SESSION['message'] = 'Error al guardar datos';
        $_SESSION['message_type'] = 'danger';
        header("Location: cargos.php");
        die();
    }
    $_SESSION['message'] = 'Dato guardado correctamente';
    $_SESSION['message_type'] = 'success';
   header("Location:cargos.php");
}

?>