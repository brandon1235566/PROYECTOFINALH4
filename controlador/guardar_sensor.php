<?php

include("../modelo/conexion.php");

$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$ubicacion = $_POST['ubicacion'];
$estado = $_POST['estado'];
$valor = $_POST['valor'];

$sql = "INSERT INTO sensores
(nombre,tipo,ubicacion,estado,valor)
VALUES
('$nombre','$tipo','$ubicacion','$estado','$valor')";

mysqli_query($conexion,$sql);

header("Location: ../vista/sensores.php");

?>