<?php

include("db.php");

if (isset($_POST['guardar'])){
    $ID_A = $_POST['ID_Alumno'];
    $Nombre = $_POST['Nombre'];
    $Apellido_P = $_POST['ApellidoP'];
    $Apellido_M = $_POST['ApellidoM'];
    $ID_D = $_POST['ID_D'];
    $ID_C = $_POST['select'];

    $query = "INSERT INTO Alumnos(id,nombre,apellidop,apellidom,direccion,carrera) 
    VALUES ('$ID_A', '$Nombre','$Apellido_P','$Apellido_M','$ID_D','$ID_C')";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);

   
    if (!$result){
        
        $_SESSION['message'] = 'Error al guardar datos';
        $_SESSION['message_type'] = 'danger';
        header("Location: alumnos.php");
        die();
    }
    $_SESSION['message'] = 'Dato guardado correctamente';
    $_SESSION['message_type'] = 'success';
   header("Location: alumnos.php");
}

?>