<?php

include("db.php");

if (isset($_POST['guardar'])){
    $ID_A = $_POST['ID_Alumno'];
    $Turno = $_POST['Turno'];
    

    $query = "INSERT INTO turno (id,turno) 
    VALUES ('$ID_A','$Turno')";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    if (!$result){
        $_SESSION['message'] = 'Error al guardar datos';
        $_SESSION['message_type'] = 'danger';
        header("Location: turno.php");
        die();
    }
    $_SESSION['message'] = 'Dato guardado correctamente';
    $_SESSION['message_type'] = 'success';
   header("Location:turno.php");
}

?>