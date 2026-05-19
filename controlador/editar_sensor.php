<?php

include("../modelo/conexion.php");

$id = $_GET['id'];

$sensor = mysqli_query($conexion, "SELECT * FROM sensores WHERE id='$id'");

$datos = mysqli_fetch_assoc($sensor);

if(isset($_POST['actualizar'])){

    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $ubicacion = $_POST['ubicacion'];
    $estado = $_POST['estado'];
    $valor = $_POST['valor'];

    $update = mysqli_query($conexion,"
    
    UPDATE sensores SET
    
    nombre='$nombre',
    tipo='$tipo',
    ubicacion='$ubicacion',
    estado='$estado',
    valor='$valor'
    
    WHERE id='$id'
    
    ");

    if($update){

        header("Location: ../vista/sensores.php");

    }else{

        echo "Error al actualizar";

    }

}

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Editar Sensor</title>

<style>

body{
    font-family:Arial;
    background:#f5f5f5;
    padding:40px;
}

.contenedor{
    max-width:500px;
    background:white;
    margin:auto;
    padding:30px;
    border-radius:14px;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

h1{
    margin-bottom:20px;
    color:#2d6a4f;
}

input{
    width:100%;
    padding:12px;
    margin-bottom:15px;
    border-radius:10px;
    border:1px solid #ccc;
}

button{
    background:#2d6a4f;
    color:white;
    border:none;
    padding:12px 20px;
    border-radius:10px;
    cursor:pointer;
    font-size:16px;
}

button:hover{
    background:#1f4e3b;
}

a{
    text-decoration:none;
    color:#2d6a4f;
}

</style>

</head>

<body>

<div class="contenedor">

<h1>✏️ Editar Sensor</h1>

<form method="POST">

<input
type="text"
name="nombre"
value="<?php echo $datos['nombre']; ?>"
required
>

<input
type="text"
name="tipo"
value="<?php echo $datos['tipo']; ?>"
required
>

<input
type="text"
name="ubicacion"
value="<?php echo $datos['ubicacion']; ?>"
required
>

<input
type="text"
name="estado"
value="<?php echo $datos['estado']; ?>"
required
>

<input
type="text"
name="valor"
value="<?php echo $datos['valor']; ?>"
required
>

<button type="submit" name="actualizar">
Actualizar Sensor
</button>

</form>

<br>

<a href="../vista/sensores.php">
← Volver
</a>

</div>

</body>
</html>