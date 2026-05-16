<?php

session_start();

include("../modelo/conexion.php");

$correo = $_POST['correo'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios 
WHERE correo='$correo' 
AND password='$password'";

$resultado = mysqli_query($conexion, $sql);

if(mysqli_num_rows($resultado) > 0){

    $_SESSION['usuario'] = $correo;

    header("Location: ../vista/dashboard.php");

}else{

    echo "
    <script>
        alert('Correo o contraseña incorrectos');
        window.location='../vista/login.php';
    </script>
    ";

}

?>