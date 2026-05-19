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
  --verde-claro:#52b788;
  --verde-lima:#95d5b2;
  --tierra:#a3785a;
  --crema:#f5f0e8;
  --cafe:#3d2b1f;
  --blanco:#fff;
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
  min-height:100vh;
}

.sidebar{
  width:var(--sidebar);
  background:var(--verde);
  min-height:100vh;
  padding:1.5rem 1rem;
  display:flex;
  flex-direction:column;
  position:fixed;
  top:0;
  left:0;
}

.sidebar-logo{
  font-family:'DM Serif Display',serif;
  font-size:1.3rem;
  color:var(--blanco);
  margin-bottom:2.5rem;
  padding-bottom:1.5rem;
  border-bottom:1px solid rgba(255,255,255,0.15);
}

.sidebar-logo em{
  color:var(--verde-lima);
  font-style:italic;
}

.sidebar nav a{
  display:flex;
  align-items:center;
  gap:0.7rem;
  color:rgba(255,255,255,0.7);
  text-decoration:none;
  padding:0.65rem 0.8rem;
  border-radius:10px;
  font-size:0.9rem;
  font-weight:600;
  margin-bottom:0.3rem;
  transition:all 0.2s;
}

.sidebar nav a:hover,
.sidebar nav a.active{
  background:rgba(255,255,255,0.15);
  color:var(--blanco);
}

.sidebar nav a.active{
  border-left:3px solid var(--verde-lima);
}

.sidebar-footer{
  margin-top:auto;
  padding-top:1rem;
  border-top:1px solid rgba(255,255,255,0.15);
}

.sidebar-footer a{
  color:rgba(255,255,255,0.6);
  text-decoration:none;
  font-size:0.85rem;
}

.main{
  margin-left:var(--sidebar);
  flex:1;
  padding:2rem;
}

.topbar{
  margin-bottom:2rem;
}

.topbar h1{
  font-family:'DM Serif Display',serif;
  font-size:1.8rem;
}

.topbar p{
  color:#8a7a70;
  font-size:0.85rem;
  margin-top:0.2rem;
}

/* FORMULARIO */

.formulario{
  display:none;
  background:var(--blanco);
  padding:1.5rem;
  border-radius:14px;
  margin-bottom:2rem;
  box-shadow:0 2px 12px var(--sombra);
}

.formulario h2{
  font-family:'DM Serif Display',serif;
  margin-bottom:1rem;
}

.form-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:1rem;
}

.form-grid input,
.form-grid select{
  padding:0.8rem;
  border-radius:10px;
  border:1px solid #ddd;
  font-family:'Nunito',sans-serif;
}

.btn-guardar{
  margin-top:1rem;
  background:var(--verde);
  color:white;
  border:none;
  padding:0.7rem 1.3rem;
  border-radius:20px;
  font-weight:700;
  cursor:pointer;
}

/* RESUMEN */

.resumen{
  display:grid;
  grid-template-columns:repeat(4,1fr);
  gap:1rem;
  margin-bottom:2rem;
}

.res-card{
  background:var(--blanco);
  border-radius:12px;
  padding:1.2rem;
  text-align:center;
  box-shadow:0 2px 10px var(--sombra);
}

.res-card .num{
  font-family:'DM Serif Display',serif;
  font-size:2rem;
  color:var(--verde);
}

.res-card .lbl{
  font-size:0.78rem;
  color:#8a7a70;
  font-family:'Space Mono',monospace;
}

/* TABLA */

.table-section{
  background:var(--blanco);
  border-radius:14px;
  padding:1.5rem;
  box-shadow:0 2px 12px var(--sombra);
  margin-bottom:2rem;
}

.table-header{
  display:flex;
  justify-content:space-between;
  align-items:center;
  margin-bottom:1.2rem;
}

.table-header h2{
  font-family:'DM Serif Display',serif;
  font-size:1.2rem;
}

.btn-add{
  background:var(--verde);
  color:var(--blanco);
  border:none;
  padding:0.5rem 1.2rem;
  border-radius:20px;
  font-family:'Nunito',sans-serif;
  font-weight:700;
  cursor:pointer;
  font-size:0.88rem;
}

table{
  width:100%;
  border-collapse:collapse;
}

th{
  text-align:left;
  font-family:'Space Mono',monospace;
  font-size:0.72rem;
  color:#8a7a70;
  text-transform:uppercase;
  padding:0.6rem 0.8rem;
  border-bottom:2px solid #f0f0f0;
}

td{
  padding:0.9rem 0.8rem;
  border-bottom:1px solid #f8f5f2;
  font-size:0.88rem;
  vertical-align:middle;
}

tr:hover td{
  background:#f9fdf9;
}

.badge{
  display:inline-block;
  padding:0.2rem 0.6rem;
  border-radius:10px;
  font-size:0.72rem;
  font-weight:700;
  font-family:'Space Mono',monospace;
}

.badge.activo{
  background:#d8f3dc;
  color:var(--verde);
}

.badge.mantenimiento{
  background:#fff3cd;
  color:#856404;
}

.sensor-id{
  font-family:'Space Mono',monospace;
  font-size:0.8rem;
  color:var(--verde);
  font-weight:700;
}

.precision{
  color:#457b9d;
  font-family:'Space Mono',monospace;
  font-size:0.82rem;
}

.action-btn{
  background:none;
  border:1px solid #e0d8d0;
  border-radius:6px;
  padding:0.25rem 0.6rem;
  cursor:pointer;
  font-size:0.78rem;
  color:var(--cafe);
  margin-right:0.3rem;
}

.action-btn:hover{
  background:var(--verde);
  color:var(--blanco);
  border-color:var(--verde);
}

/* MATRIZ */

.matriz{
  background:var(--blanco);
  border-radius:14px;
  padding:1.5rem;
  box-shadow:0 2px 12px var(--sombra);
}

.matriz h2{
  font-family:'DM Serif Display',serif;
  font-size:1.2rem;
  margin-bottom:1.2rem;
}

.matriz table th{
  background:var(--crema);
}

.check{
  color:var(--verde);
  font-weight:700;
}

.cross{
  color:#e63946;
  font-weight:700;
}

.selected-row td{
  background:#f0fdf4;
  font-weight:700;
}

.selected-badge{
  background:var(--verde-lima);
  color:var(--verde);
  font-size:0.68rem;
  padding:0.1rem 0.4rem;
  border-radius:6px;
  font-family:'Space Mono',monospace;
  margin-left:0.4rem;
}

</style>
</head>

<body>

<aside class="sidebar">

<div class="sidebar-logo">
Agro<em>Visión</em>
</div>

<nav>
<a href="index.php"><span>🏠</span> Inicio</a>
<a href="dashboard.php"><span>📊</span> Dashboard</a>
<a href="sensores.php" class="active"><span>📡</span> Sensores</a>
<a href="cultivos.php"><span>🌿</span> Cultivos</a>
<a href="reportes.php"><span>📋</span> Reportes</a>
<a href="login.php"><span>👤</span> Mi Perfil</a>
</nav>

<div class="sidebar-footer">
<a href="index.php">← Inicio</a>
</div>

</aside>

<main class="main">

<div class="topbar">
<h1>Gestión de Sensores</h1>
<p>Monitorea y configura los sensores ambientales de tus cultivos</p>
</div>

<!-- FORMULARIO -->

<div class="formulario" id="formularioSensor">

<h2>📡 Registrar Nuevo Sensor</h2>

<form>

<div class="form-grid">

<input type="text" placeholder="ID del sensor">

<select>
<option>Tipo de sensor</option>
<option>DHT22</option>
<option>Capacitive v2</option>
<option>BH1750</option>
<option>pH-4502C</option>
</select>

<input type="text" placeholder="Variable">

<input type="text" placeholder="Cultivo asignado">

</div>

<button type="submit" class="btn-guardar">
Guardar Sensor
</button>

</form>

</div>

<div class="resumen">

<div class="res-card">
<div class="num">5</div>
<div class="lbl">Total Sensores</div>
</div>

<div class="res-card">
<div class="num">4</div>
<div class="lbl">Activos</div>
</div>

<div class="res-card">
<div class="num">1</div>
<div class="lbl">En Mantenimiento</div>
</div>

<div class="res-card">
<div class="num">>98%</div>
<div class="lbl">Tasa de Captura</div>
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
<th>Tipo</th>
<th>Variable</th>
<th>Precisión</th>
<th>Vida Útil</th>
<th>Cultivo Asignado</th>
<th>Últ. Lectura</th>
<th>Estado</th>
<th>Acciones</th>
</tr>
</thead>

<tbody>

<tr>
<td class="sensor-id">T-01</td>
<td>🌡️ DHT22</td>
<td>Temperatura</td>
<td class="precision">±0.5°C</td>
<td>>24 meses</td>
<td>Maíz — Parcela Norte</td>
<td>24°C — hace 5 min</td>
<td><span class="badge activo">Activo</span></td>
<td>
<button class="action-btn">✏️</button>
<button class="action-btn">📊</button>
</td>
</tr>

<tr>
<td class="sensor-id">H-01</td>
<td>💧 Capacitive v2</td>
<td>Humedad Suelo</td>
<td class="precision">±2%</td>
<td>>18 meses</td>
<td>Maíz — Parcela Norte</td>
<td>63% — hace 5 min</td>
<td><span class="badge activo">Activo</span></td>
<td>
<button class="action-btn">✏️</button>
<button class="action-btn">📊</button>
</td>
</tr>

<tr>
<td class="sensor-id">P-01</td>
<td>🧪 pH-4502C</td>
<td>pH Suelo</td>
<td class="precision">±0.1 pH</td>
<td>>12 meses</td>
<td>Papa — Parcela Sur</td>
<td>— (mantenimiento)</td>
<td><span class="badge mantenimiento">Mantenimiento</span></td>
<td>
<button class="action-btn">✏️</button>
<button class="action-btn">📊</button>
</td>
</tr>

</tbody>

</table>

</div>

<div class="matriz">

<h2>📊 Matriz Comparativa de Sensores — Humedad de Suelo</h2>

<table>

<thead>
<tr>
<th>Sensor</th>
<th>Precisión</th>
<th>Costo</th>
<th>Vida Útil</th>
<th>Compatibilidad</th>
<th>Instalación</th>
<th>Seleccionado</th>
</tr>
</thead>

<tbody>

<tr class="selected-row">
<td>
Capacitive Soil v2
<span class="selected-badge">✓ ELEGIDO</span>
</td>

<td class="precision">±2%</td>
<td>$4.50</td>
<td>>18 meses</td>
<td class="check">✓ Arduino/ESP32</td>
<td class="check">Fácil</td>
<td class="check">✓</td>
</tr>

<tr>
<td>FC-28 Resistivo</td>
<td class="precision">±5%</td>
<td>$1.20</td>
<td><6 meses</td>
<td class="check">✓ Arduino/ESP32</td>
<td class="check">Fácil</td>
<td class="cross">✗</td>
</tr>

</tbody>

</table>

<p style="margin-top:0.8rem;font-size:0.8rem;color:#8a7a70;">
✅ Criterios: Precisión ≤±2% · Costo bajo · Vida útil >12 meses · Compatible con plataforma
</p>

</div>

</main>

<script>

function mostrarFormulario(){

let form = document.getElementById("formularioSensor");

if(form.style.display === "none" || form.style.display === ""){
    form.style.display = "block";
}else{
    form.style.display = "none";
}

}

</script>

</body>
</html>