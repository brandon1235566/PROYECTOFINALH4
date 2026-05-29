<?php

include("../modelo/conexion.php");

/*
========================================
CONSULTA
========================================
*/

$consulta = mysqli_query(
    $conexion,
    "SELECT * FROM sensores ORDER BY id DESC LIMIT 10"
);

$labels = [];

$temperatura = [];

$humedad = [];

$luminosidad = [];

while($fila = mysqli_fetch_assoc($consulta)){

    $labels[] = $fila['nombre'];

    $tipo = strtolower($fila['tipo']);

    if($tipo == "temperatura"){

        $temperatura[] = $fila['valor'];
        $humedad[] = null;
        $luminosidad[] = null;

    }

    elseif($tipo == "humedad"){

        $temperatura[] = null;
        $humedad[] = $fila['valor'];
        $luminosidad[] = null;

    }

    else{

        $temperatura[] = null;
        $humedad[] = null;
        $luminosidad[] = $fila['valor'];

    }

}

/*
========================================
JSON
========================================
*/

echo json_encode([

    "labels" => array_reverse($labels),

    "temperatura" => array_reverse($temperatura),

    "humedad" => array_reverse($humedad),

    "luminosidad" => array_reverse($luminosidad)

]);

?>