<?php

include("../modelo/conexion.php");

/* VALIDAR DATOS */

if(
    isset($_GET['nombre']) &&
    isset($_GET['tipo']) &&
    isset($_GET['ubicacion']) &&
    isset($_GET['estado']) &&
    isset($_GET['valor'])
){

    $nombre = $_GET['nombre'];
    $tipo = $_GET['tipo'];
    $ubicacion = $_GET['ubicacion'];
    $estado = $_GET['estado'];
    $valor = $_GET['valor'];

    /* GUARDAR SENSOR */

    $sql = "
    INSERT INTO sensores(
        nombre,
        tipo,
        ubicacion,
        estado,
        valor
    )
    VALUES(
        '$nombre',
        '$tipo',
        '$ubicacion',
        '$estado',
        '$valor'
    )
    ";

    if(mysqli_query($conexion, $sql)){

        echo "SENSOR GUARDADO<br>";

    }else{

        die("ERROR SENSOR: " . mysqli_error($conexion));

    }

    /* ALERTA TEMPERATURA */

    if(
    strtolower(trim($tipo)) == "temperatura"
    &&
    floatval($valor) > 35
){

        $alerta = "
        INSERT INTO alertas(
            sensor,
            mensaje,
            nivel
        )
        VALUES(
            '$nombre',
            'Temperatura demasiado alta',
            'Peligro'
        )
        ";

        if(mysqli_query($conexion, $alerta)){

            echo "ALERTA DE TEMPERATURA GUARDADA";

        }else{

            echo "ERROR ALERTA: " . mysqli_error($conexion);

        }

    }

    /* ALERTA HUMEDAD */

    if(
    strtolower(trim($tipo)) == "humedad"
    &&
    floatval($valor) < 20
){

        $alerta = "
        INSERT INTO alertas(
            sensor,
            mensaje,
            nivel
        )
        VALUES(
            '$nombre',
            'Humedad demasiado baja',
            'Advertencia'
        )
        ";

        if(mysqli_query($conexion, $alerta)){

            echo "ALERTA DE HUMEDAD GUARDADA";

        }else{

            echo "ERROR ALERTA: " . mysqli_error($conexion);

        }

    }

}else{

    echo "FALTAN DATOS";

}

?>