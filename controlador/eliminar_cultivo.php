<?php

include("../modelo/conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM cultivos WHERE id='$id'";

mysqli_query($conexion,$sql);

header("Location: ../vista/cultivos.php");

?>