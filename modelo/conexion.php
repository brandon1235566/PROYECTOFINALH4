<?php

$conexion = mysqli_connect(
    "localhost",
    "root",
    "",
    "agrovision"
);

if(!$conexion){
    die("Error de conexión");
}

?>