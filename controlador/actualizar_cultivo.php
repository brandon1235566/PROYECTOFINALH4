<?php

include("../modelo/conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$ubicacion = $_POST['ubicacion'];

$sql = "UPDATE cultivos 
SET nombre='$nombre',
tipo='$tipo',
ubicacion='$ubicacion'
WHERE id='$id'";

mysqli_query($conexion,$sql);

header("Location: ../vista/cultivos.php");

?>