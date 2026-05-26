<?php

include("../modelo/conexion.php");

$consulta = mysqli_query(
    $conexion,
    "SELECT * FROM sensores ORDER BY id DESC LIMIT 10"
);

$alertas = [];

while($dato = mysqli_fetch_assoc($consulta)){

    $tipo = strtolower($dato['tipo']);

    $valor = $dato['valor'];

    /*
    TEMPERATURA
    */

    if($tipo == "temperatura" && $valor > 35){

        $alertas[] =
        "🚨 Temperatura muy alta en "
        . $dato['ubicacion']
        . " (" . $valor . "°C)";

    }

    /*
    HUMEDAD
    */

    if($tipo == "humedad" && $valor < 20){

        $alertas[] =
        "⚠️ Humedad muy baja en "
        . $dato['ubicacion']
        . " (" . $valor . "%)";

    }

}

echo json_encode($alertas);

?>