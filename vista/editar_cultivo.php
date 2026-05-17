<?php

include("../modelo/conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM cultivos WHERE id='$id'";

$resultado = mysqli_query($conexion,$sql);

$fila = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Cultivo</title>

<style>

body{
    font-family:Arial;
    background:#f0f4f1;
    padding:2rem;
}

.form-box{
    background:white;
    max-width:500px;
    margin:auto;
    padding:2rem;
    border-radius:15px;
}

input{
    width:100%;
    padding:0.8rem;
    margin-bottom:1rem;
}

button{
    background:#2d6a4f;
    color:white;
    border:none;
    padding:0.8rem 1.5rem;
    border-radius:10px;
    cursor:pointer;
}

</style>

</head>
<body>

<div class="form-box">

<h2>✏️ Editar Cultivo</h2>

<form action="../controlador/actualizar_cultivo.php" method="POST">

    <input 
        type="hidden"
        name="id"
        value="<?php echo $fila['id']; ?>"
    >

    <input 
        type="text"
        name="nombre"
        value="<?php echo $fila['nombre']; ?>"
        required
    >

    <input 
        type="text"
        name="tipo"
        value="<?php echo $fila['tipo']; ?>"
        required
    >

    <input 
        type="text"
        name="ubicacion"
        value="<?php echo $fila['ubicacion']; ?>"
        required
    >

    <button type="submit">
        Actualizar Cultivo
    </button>

</form>

</div>

</body>
</html>