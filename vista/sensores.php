<?php

include("../modelo/conexion.php");

$sensores = mysqli_query($conexion, "SELECT * FROM sensores");

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>AgroVisión - Sensores</title>

<link rel="preconnect" href="https://fonts.googleapis.com">

<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Space+Mono:wght@400;700&family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>

:root{
  --verde:#2d6a4f;
  --verde-lima:#95d5b2;
  --blanco:#fff;
  --cafe:#3d2b1f;
  --sombra:rgba(45,106,79,0.12);
  --sidebar:220px;
}

*{
  margin:0;
  padding:0;
  box-sizing:border-box;
}

body{
  font-family:'Nunito',sans-serif;
  background:#f0f4f1;
  color:var(--cafe);
  display:flex;
}

.sidebar{
  width:var(--sidebar);
  background:var(--verde);
  min-height:100vh;
  padding:1.5rem 1rem;
  position:fixed;
}

.sidebar-logo{
  color:white;
  font-size:1.5rem;
  margin-bottom:2rem;
  font-family:'DM Serif Display',serif;
}

.sidebar-logo em{
  color:var(--verde-lima);
}

.sidebar nav a{
  display:block;
  color:white;
  text-decoration:none;
  padding:0.8rem;
  border-radius:10px;
  margin-bottom:0.5rem;
}

.sidebar nav a:hover,
.sidebar nav a.active{
  background:rgba(255,255,255,0.15);
}

.main{
  margin-left:var(--sidebar);
  width:100%;
  padding:2rem;
}

.topbar{
  margin-bottom:2rem;
}

.topbar h1{
  font-family:'DM Serif Display',serif;
  font-size:2rem;
}

.topbar p{
  color:#777;
}

.formulario{
  display:none;
  background:white;
  padding:1.5rem;
  border-radius:14px;
  margin-bottom:2rem;
  box-shadow:0 2px 12px var(--sombra);
}

.form-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:1rem;
}

.form-grid input{
  padding:0.8rem;
  border:1px solid #ddd;
  border-radius:10px;
}

.btn-guardar{
  margin-top:1rem;
  background:var(--verde);
  color:white;
  border:none;
  padding:0.7rem 1.3rem;
  border-radius:20px;
  cursor:pointer;
  font-weight:bold;
}

.resumen{
  display:grid;
  grid-template-columns:repeat(4,1fr);
  gap:1rem;
  margin-bottom:2rem;
}

.res-card{
  background:white;
  padding:1.5rem;
  border-radius:14px;
  text-align:center;
  box-shadow:0 2px 10px var(--sombra);
}

.res-card .num{
  font-size:2rem;
  color:var(--verde);
  font-weight:bold;
}

.table-section{
  background:white;
  padding:1.5rem;
  border-radius:14px;
  box-shadow:0 2px 12px var(--sombra);
}

.table-header{
  display:flex;
  justify-content:space-between;
  align-items:center;
  margin-bottom:1rem;
}

.btn-add{
  background:var(--verde);
  color:white;
  border:none;
  padding:0.6rem 1rem;
  border-radius:20px;
  cursor:pointer;
  font-weight:bold;
}

table{
  width:100%;
  border-collapse:collapse;
}

th{
  text-align:left;
  padding:0.8rem;
  border-bottom:2px solid #eee;
}

td{
  padding:0.9rem 0.8rem;
  border-bottom:1px solid #f1f1f1;
}

.badge{
  background:#d8f3dc;
  color:var(--verde);
  padding:0.3rem 0.7rem;
  border-radius:10px;
  font-size:0.8rem;
  font-weight:bold;
}

.action-btn{
  border:none;
  padding:0.4rem 0.8rem;
  border-radius:8px;
  cursor:pointer;
  text-decoration:none;
  margin-right:0.3rem;
  font-size:0.9rem;
}

.editar{
  background:#e9f5ee;
  color:var(--verde);
}

.eliminar{
  background:#ffe5e5;
  color:#c0392b;
}

.action-btn:hover{
  opacity:0.8;
}

</style>

</head>

<body>

<aside class="sidebar">

<div class="sidebar-logo">
Agro<em>Visión</em>
</div>

<nav>
<a href="index.php">🏠 Inicio</a>
<a href="dashboard.php">📊 Dashboard</a>
<a href="sensores.php" class="active">📡 Sensores</a>
<a href="cultivos.php">🌿 Cultivos</a>
<a href="reportes.php">📋 Reportes</a>
</nav>

</aside>

<main class="main">

<div class="topbar">
<h1>Gestión de Sensores</h1>
<p>Monitorea y administra tus sensores IoT</p>
</div>

<div class="formulario" id="formularioSensor">

<h2>📡 Registrar Sensor</h2>

<form action="../controlador/guardar_sensor.php" method="POST">

<div class="form-grid">

<input type="text" name="nombre" placeholder="Nombre sensor" required>

<input type="text" name="tipo" placeholder="Tipo sensor" required>

<input type="text" name="ubicacion" placeholder="Ubicación" required>

<input type="text" name="estado" placeholder="Estado" required>

<input type="text" name="valor" placeholder="Valor" required>

</div>

<button type="submit" class="btn-guardar">
Guardar Sensor
</button>

</form>

</div>

<div class="resumen">

<div class="res-card">
<div class="num">
<?php echo mysqli_num_rows($sensores); ?>
</div>
<div>Total Sensores</div>
</div>

<div class="res-card">
<div class="num">ESP32</div>
<div>Compatible</div>
</div>

<div class="res-card">
<div class="num">MYSQL</div>
<div>Base de Datos</div>
</div>

<div class="res-card">
<div class="num">IoT</div>
<div>Sistema Inteligente</div>
</div>

</div>

<div class="table-section">

<div class="table-header">

<h2>📡 Sensores Registrados</h2>

<button class="btn-add" onclick="mostrarFormulario()">
+ Nuevo Sensor
</button>

</div>

<table>

<thead>

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Tipo</th>
<th>Ubicación</th>
<th>Estado</th>
<th>Valor</th>
<th>Fecha</th>
<th>Acciones</th>
</tr>

</thead>

<tbody>

<?php

mysqli_data_seek($sensores,0);

while($sensor = mysqli_fetch_assoc($sensores)){

?>

<tr>

<td><?php echo $sensor['id']; ?></td>

<td><?php echo $sensor['nombre']; ?></td>

<td><?php echo $sensor['tipo']; ?></td>

<td><?php echo $sensor['ubicacion']; ?></td>

<td>
<span class="badge">
<?php echo $sensor['estado']; ?>
</span>
</td>

<td><?php echo $sensor['valor']; ?></td>

<td><?php echo $sensor['fecha']; ?></td>

<td>

<a
class="action-btn editar"
href="../controlador/editar_sensor.php?id=<?php echo $sensor['id']; ?>"
>
✏️ Editar
</a>

<a
class="action-btn eliminar"
href="../controlador/eliminar_sensor.php?id=<?php echo $sensor['id']; ?>"
onclick="return confirm('¿Eliminar sensor?')"
>
🗑️ Eliminar
</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</main>

<script>

function mostrarFormulario(){

let form = document.getElementById("formularioSensor");

if(form.style.display === "block"){
    form.style.display = "none";
}else{
    form.style.display = "block";
}

}

/*
RECARGA AUTOMÁTICA CADA 5 SEGUNDOS
*/

setInterval(function(){

    location.reload();

}, 5000);

</script>
<script>

setInterval(function(){

    location.reload();

},5000);

</script>

</body>
</html>