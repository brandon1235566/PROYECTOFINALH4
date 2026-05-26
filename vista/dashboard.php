<?php

include("../modelo/conexion.php");

/*
========================================
CONSULTA SENSORES
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

    /*
    TEMPERATURA
    */

    if($tipo == "temperatura"){

        $temperatura[] = $fila['valor'];
        $humedad[] = null;
        $luminosidad[] = null;

    }

    /*
    HUMEDAD
    */

    elseif($tipo == "humedad"){

        $temperatura[] = null;
        $humedad[] = $fila['valor'];
        $luminosidad[] = null;

    }

    /*
    LUMINOSIDAD
    */

    else{

        $temperatura[] = null;
        $humedad[] = null;
        $luminosidad[] = $fila['valor'];

    }

}

/*
========================================
ORDENAR DATOS
========================================
*/

$labels = array_reverse($labels);

$temperatura = array_reverse($temperatura);

$humedad = array_reverse($humedad);

$luminosidad = array_reverse($luminosidad);

/*
========================================
ALERTAS
========================================
*/
/*
========================================
ESTADISTICAS TEMPERATURA
========================================
*/

$tempValores = [];

$consultaTemp = mysqli_query(
    $conexion,
    "SELECT * FROM sensores
     WHERE tipo='Temperatura'"
);

while($temp = mysqli_fetch_assoc($consultaTemp)){

    $tempValores[] = $temp['valor'];

}

/*
MAXIMA
*/

$tempMaxima = 0;

if(count($tempValores) > 0){

    $tempMaxima = max($tempValores);

}

/*
MINIMA
*/

$tempMinima = 0;

if(count($tempValores) > 0){

    $tempMinima = min($tempValores);

}

/*
PROMEDIO
*/

$tempPromedio = 0;

if(count($tempValores) > 0){

    $tempPromedio =
    round(
        array_sum($tempValores)
        /
        count($tempValores),
        1
    );

}
$alertas = [];

$consultaAlertas = mysqli_query(
    $conexion,
    "SELECT * FROM sensores ORDER BY id DESC LIMIT 10"
);

while($dato = mysqli_fetch_assoc($consultaAlertas)){

    $tipo = strtolower($dato['tipo']);

    $valor = $dato['valor'];

    /*
    ALERTA TEMPERATURA
    */

    if($tipo == "temperatura" && $valor > 35){

        $alertas[] =
        "🚨 Temperatura muy alta en "
        . $dato['ubicacion']
        . " (" . $valor . "°C)";

    }

    /*
    ALERTA HUMEDAD
    */

    if($tipo == "humedad" && $valor < 20){

        $alertas[] =
        "⚠️ Humedad muy baja en "
        . $dato['ubicacion']
        . " (" . $valor . "%)";

    }

}

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1.0"
>

<title>AgroVisión - Dashboard</title>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">

<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Space+Mono:wght@400;700&family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>

:root{
  --verde:#2d6a4f;
  --verde-claro:#52b788;
  --verde-lima:#95d5b2;
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

/* SIDEBAR */

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

/* MAIN */

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
  font-size:2rem;
}

.topbar p{
  color:#8a7a70;
  margin-top:0.4rem;
}

/* CARDS */

.cards{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:1rem;
  margin-bottom:2rem;
}

.card{
  background:var(--blanco);
  padding:1.5rem;
  border-radius:14px;
  box-shadow:0 2px 12px var(--sombra);
}

.card h3{
  font-size:1rem;
  margin-bottom:0.5rem;
}

.card .numero{
  font-size:2rem;
  font-weight:bold;
  color:var(--verde);
}

/* ALERTAS */

.alertas{
  background:#ffe5e5;
  padding:1rem;
  border-radius:12px;
  margin-bottom:1.5rem;
  border-left:6px solid red;
}

/* GRAFICA */

.chart-container{
  background:var(--blanco);
  padding:2rem;
  border-radius:14px;
  box-shadow:0 2px 12px var(--sombra);
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

<a href="dashboard.php" class="active">
📊 Dashboard
</a>

<a href="sensores.php">
📡 Sensores
</a>

<a href="cultivos.php">
🌿 Cultivos
</a>

<a href="reportes.php">
📋 Reportes
</a>

</nav>

<div class="sidebar-footer">
<a href="index.php">← Inicio</a>
</div>

</aside>

<main class="main">

<div class="topbar">

<h1>
📊 Dashboard Inteligente AgroVisión
</h1>

<p>
Monitoreo agrícola en tiempo real con ESP32 + MYSQL
</p>

</div>

<!-- CARDS -->

<div class="cards">

<div class="card">
<h3>Total Registros</h3>
<div class="numero">
<?php echo count($labels); ?>
</div>
</div>

<div class="card">
<h3>🌡️ Temp Máxima</h3>
<div class="numero">
<?php echo $tempMaxima; ?>°
</div>
</div>

<div class="card">
<h3>❄️ Temp Mínima</h3>
<div class="numero">
<?php echo $tempMinima; ?>°
</div>
</div>

<div class="card">
<h3>📈 Promedio</h3>
<div class="numero">
<?php echo $tempPromedio; ?>°
</div>
</div>

<div class="card">
<h3>🚨 Alertas</h3>
<div class="numero">
<?php echo count($alertas); ?>
</div>
</div>

</div>

<!-- ALERTAS -->

<?php if(count($alertas) > 0){ ?>

<div class="alertas">

<h3 style="margin-bottom:0.7rem;">
🚨 Alertas Inteligentes
</h3>

<?php foreach($alertas as $alerta){ ?>

<p style="margin-bottom:0.5rem;">
<?php echo $alerta; ?>
</p>

<?php } ?>

</div>

<?php } ?>

<!-- GRAFICA -->

<div class="chart-container">

<canvas id="grafica"></canvas>

</div>

</main>

<script>

/*
========================================
CREAR GRAFICA
========================================
*/

const ctx = document.getElementById('grafica');

const grafica = new Chart(ctx, {

    type: 'line',

    data: {

        labels: <?php echo json_encode($labels); ?>,

        datasets: [

        {
            label: '🌡️ Temperatura',
            data: <?php echo json_encode($temperatura); ?>,
            borderWidth: 3,
            tension: 0.3
        },

        {
            label: '💧 Humedad',
            data: <?php echo json_encode($humedad); ?>,
            borderWidth: 3,
            tension: 0.3
        },

        {
            label: '☀️ Luminosidad',
            data: <?php echo json_encode($luminosidad); ?>,
            borderWidth: 3,
            tension: 0.3
        }

        ]

    },

    options: {

        responsive:true,

        scales:{
            y:{
                beginAtZero:true
            }
        }

    }

});

/*
========================================
ACTUALIZAR DASHBOARD
========================================
*/

async function actualizarDashboard(){

    try{

        const respuesta = await fetch(
            "../controlador/obtener_datos.php"
        );

        const datos = await respuesta.json();

        /*
        ACTUALIZAR LABELS
        */

        grafica.data.labels = datos.labels;

        /*
        ACTUALIZAR DATOS
        */

        grafica.data.datasets[0].data =
        datos.temperatura;

        grafica.data.datasets[1].data =
        datos.humedad;

        grafica.data.datasets[2].data =
        datos.luminosidad;

        /*
        REFRESCAR GRAFICA
        */

        grafica.update();

    }

    catch(error){

        console.log(
            "Error actualizando dashboard:",
            error
        );

    }

}

/*
========================================
ACTUALIZAR CADA 5 SEGUNDOS
========================================
*/

setInterval(actualizarDashboard, 5000);

</script>

</body>
</html>