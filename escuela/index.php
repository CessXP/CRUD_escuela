<!DOCTYPE html>
<?php include("includes/header.php") ?>
<style>
#alumnos_btn{
    position: absolute;
    left: 250px;
    top: 150px;
}
#profesores_btn{
    position: absolute;
    left: 450px;
    top: 150px;
}
#cargos_btn{
    position: absolute;
    left: 250px;
    top: 250px;
}
#carreras_btn{
    position: absolute;
    left: 450px;
    top: 250px;
}
#turnos_btn{
    position: absolute;
    left: 650px;
    top: 250px;
}
#direcciones_btn{
    position: absolute;
    left: 650px;
    top: 150px;
}
</style>

<a id="alumnos_btn" href="alumnos/alumnos.php" class="btn btn-primary">Alumnos</a>
<a id="profesores_btn" href="profesores/profesores.php" class="btn btn-primary">Profesores</a>
<a id="cargos_btn" href="cargos/cargos.php" class="btn btn-primary">Cargos</a>
<a id="carreras_btn" href="carreras/carreras.php" class="btn btn-primary">Carreras</a>
<a id="turnos_btn" href="turno/turno.php" class="btn btn-primary">Turnos</a>
<a id="direcciones_btn" href="direcciones/direcciones.php" class="btn btn-primary">Direcciones</a>

<?php include("includes/footer.php") ?>