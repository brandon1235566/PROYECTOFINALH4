<?php

include("../modelo/conexion.php");

$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$ubicacion = $_POST['ubicacion'];

$sql = "INSERT INTO cultivos(nombre,tipo,ubicacion)
VALUES('$nombre','$tipo','$ubicacion')";

mysqli_query($conexion,$sql);

header("Location: ../vista/cultivos.php");

?>