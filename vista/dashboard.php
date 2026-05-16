<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AgroVision - Dashboard</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Space+Mono:wght@400;700&family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.umd.min.js"></script>

<style>
:root{
--verde:#2d6a4f;
--verde-claro:#52b788;
--verde-lima:#95d5b2;
--rojo:#e63946;
--amarillo:#f4a261;
--blanco:#fff;
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
display:flex;
min-height:100vh;
}

/* SIDEBAR */
.sidebar{
width:var(--sidebar);
background:var(--verde);
padding:1.5rem;
position:fixed;
height:100%;
}

.sidebar-logo{
color:white;
font-size:1.5rem;
font-family:'DM Serif Display';
margin-bottom:2rem;
}

.sidebar nav a{
display:block;
color:white;
text-decoration:none;
padding:.8rem;
margin-bottom:.4rem;
border-radius:8px;
}

.sidebar nav a:hover,
.sidebar nav a.active{
background:rgba(255,255,255,.15);
}

/* MAIN */
.main{
margin-left:var(--sidebar);
flex:1;
padding:2rem;
}

.topbar{
display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:2rem;
}

.topbar h1{
font-family:'DM Serif Display';
font-size:2rem;
}

.time-badge{
background:white;
padding:.5rem 1rem;
border-radius:20px;
}

/* cards */
.metrics{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
gap:1rem;
margin-bottom:2rem;
}

.metric{
background:white;
padding:1.5rem;
border-radius:14px;
box-shadow:0 2px 10px rgba(0,0,0,.08);
}

.metric-label{
font-size:.8rem;
color:gray;
margin-bottom:.5rem;
}

.metric-value{
font-size:2rem;
font-weight:bold;
}

.ok{
background:#d8f3dc;
padding:.2rem .6rem;
border-radius:8px;
font-size:.75rem;
display:inline-block;
margin-top:.5rem;
}

.warn{
background:#fff3cd;
padding:.2rem .6rem;
border-radius:8px;
font-size:.75rem;
display:inline-block;
margin-top:.5rem;
}

/* charts */
.charts-row{
display:grid;
grid-template-columns:2fr 1fr;
gap:1rem;
margin-bottom:2rem;
}

.chart-card{
background:white;
padding:1.5rem;
border-radius:14px;
box-shadow:0 2px 10px rgba(0,0,0,.08);
}

.chart-card h3{
margin-bottom:1rem;
font-family:'DM Serif Display';
}

/* scan */
.scan-box{
background:white;
padding:1.5rem;
border-radius:14px;
margin-bottom:2rem;
text-align:center;
box-shadow:0 2px 10px rgba(0,0,0,.08);
}

.scan-box img{
width:250px;
border-radius:10px;
margin-bottom:1rem;
}

/* button */
.btn{
background:var(--verde);
color:white;
padding:.8rem 1.5rem;
border:none;
border-radius:10px;
cursor:pointer;
font-weight:bold;
}

/* alerts */
.alerts-section{
background:white;
padding:1.5rem;
border-radius:14px;
box-shadow:0 2px 10px rgba(0,0,0,.08);
}

.alert-item{
padding:1rem;
margin-bottom:.7rem;
border-left:5px solid var(--rojo);
background:#fff0f0;
border-radius:8px;
}
</style>
</head>

<body>

<aside class="sidebar">
<div class="sidebar-logo">AgroVision</div>

<nav>
<a href="index.html">🏠 Inicio</a>
<a href="dashboard.html" class="active">📊 Dashboard</a>
<a href="sensores.html">📡 Sensores</a>
<a href="cultivos.html">🍅 Tomates</a>
<a href="reportes.html">📋 Reportes</a>
</nav>
</aside>

<main class="main">

<div class="topbar">
<div>
<h1>Panel de Control del Tomate</h1>
<p>Cultivo activo: <strong>Tomate — Invernadero 1</strong></p>
</div>
<div class="time-badge" id="reloj"></div>
</div>

<!-- métricas -->
<div class="metrics">

<div class="metric">
<div class="metric-label">Temperatura</div>
<div class="metric-value">24°C</div>
<span class="ok">Óptimo</span>
</div>

<div class="metric">
<div class="metric-label">Humedad Suelo</div>
<div class="metric-value">72%</div>
<span class="ok">Óptimo</span>
</div>

<div class="metric">
<div class="metric-label">Humedad Aire</div>
<div class="metric-value">78%</div>
<span class="warn">Alta</span>
</div>

<div class="metric">
<div class="metric-label">pH Suelo</div>
<div class="metric-value">6.5</div>
<span class="ok">Óptimo</span>
</div>

<div class="metric">
<div class="metric-label">Salud del cultivo</div>
<div class="metric-value">92%</div>
<span class="ok">Saludable</span>
</div>

</div>

<!-- graficas -->
<div class="charts-row">

<div class="chart-card">
<h3>Historial ambiental</h3>
<canvas id="chartLineal"></canvas>
</div>

<div class="chart-card">
<h3>Estado del tomate</h3>
<canvas id="chartDona"></canvas>
</div>

</div>

<!-- escaneo -->
<div class="scan-box">
<h3>Último Escaneo de Hoja</h3>

<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Tomato_leaf.jpg/320px-Tomato_leaf.jpg">

<p><strong>Resultado IA:</strong> Hoja saludable 🍃</p>

<br>

<button class="btn"
onclick="window.location.href='subir_imagen.php'">
Escanear Hoja de Tomate
</button>

</div>

<!-- alertas -->
<div class="alerts-section">

<h3>Alertas recientes</h3>

<div class="alert-item">
🚨 Riesgo de tizón temprano detectado
</div>

<div class="alert-item">
⚠ Humedad alta favorece aparición de mildiu
</div>

<div class="alert-item">
ℹ Última lectura correcta: hace 5 minutos
</div>

</div>

</main>

<script>
function reloj(){
document.getElementById("reloj").innerHTML=
new Date().toLocaleTimeString("es-BO");
}
setInterval(reloj,1000);
reloj();

const ctx=document.getElementById('chartLineal');

new Chart(ctx,{
type:'line',
data:{
labels:['8','9','10','11','12','13'],
datasets:[
{
label:'Temperatura',
data:[22,23,24,25,24,24],
borderColor:'#e76f51'
},
{
label:'Humedad',
data:[70,72,74,73,72,72],
borderColor:'#457b9d'
}
]
}
});

const ctx2=document.getElementById('chartDona');

new Chart(ctx2,{
type:'doughnut',
data:{
labels:['Saludable','Alerta'],
datasets:[{
data:[92,8],
backgroundColor:['#52b788','#e63946']
}]
}
});
</script>

</body>
</html>