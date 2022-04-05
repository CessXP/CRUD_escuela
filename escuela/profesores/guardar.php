<?php

include("db.php");

if (isset($_POST['guardar'])){
    $ID_A = $_POST['ID_Alumno'];
    $Nombre = $_POST['Nombre'];
    $Apellido_P = $_POST['ApellidoP'];
    $Apellido_M = $_POST['select'];
    $carrera = $_POST['carrera'];

    $query = "INSERT INTO profesor(id,nombre,apellidos,cargo,carrera) 
    VALUES ('$ID_A', '$Nombre','$Apellido_P','$Apellido_M','$carrera')";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
   
    if (!$result){
        $_SESSION['message'] = 'Error al guardar datos';
        $_SESSION['message_type'] = 'danger';
        header("Location: profesores.php");
        die();
    }
    $_SESSION['message'] = 'Dato guardado correctamente';
    $_SESSION['message_type'] = 'success';
   header("Location: profesores.php");
}

?>