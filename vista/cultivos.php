<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
}

include("../modelo/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AgroVisión - Cultivos</title>

<link rel="preconnect" href="https://fonts.googleapis.com">

<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Space+Mono:wght@400;700&family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>

  :root {
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
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
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

  .btn-add{
    background:var(--verde);
    color:var(--blanco);
    border:none;
    padding:0.6rem 1.4rem;
    border-radius:20px;
    font-family:'Nunito',sans-serif;
    font-weight:700;
    cursor:pointer;
    font-size:0.9rem;
  }

  .btn-add:hover{
    background:var(--verde-claro);
  }

  .formulario{
    display:none;
    background:var(--blanco);
    padding:1.5rem;
    border-radius:16px;
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

  .form-grid input{
    padding:0.8rem;
    border-radius:10px;
    border:1px solid #ddd;
    font-family:'Nunito',sans-serif;
  }

  .cultivos-grid{
    display:grid;
    grid-template-columns:repeat(auto-fill,minmax(300px,1fr));
    gap:1.5rem;
    margin-bottom:2rem;
  }

  .cultivo-card{
    background:var(--blanco);
    border-radius:16px;
    overflow:hidden;
    box-shadow:0 2px 12px var(--sombra);
    transition:transform 0.2s;
  }

  .cultivo-card:hover{
    transform:translateY(-3px);
  }

  .cultivo-header{
    padding:1.2rem;
    display:flex;
    align-items:center;
    gap:1rem;
  }

  .cultivo-emoji{
    width:52px;
    height:52px;
    border-radius:14px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:1.8rem;
    background:#e8f5e9;
  }

  .cultivo-info h3{
    font-family:'DM Serif Display',serif;
    font-size:1.1rem;
  }

  .cultivo-info p{
    font-size:0.8rem;
    color:#8a7a70;
  }

  .badge{
    display:inline-block;
    padding:0.2rem 0.6rem;
    border-radius:10px;
    font-size:0.72rem;
    font-weight:700;
    font-family:'Space Mono',monospace;
    background:#d8f3dc;
    color:var(--verde);
  }

  .cultivo-metricas{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    border-top:1px solid #f0ebe5;
  }

  .met-item{
    padding:0.8rem;
    text-align:center;
    border-right:1px solid #f0ebe5;
  }

  .met-item:last-child{
    border-right:none;
  }

  .met-val{
    font-family:'DM Serif Display',serif;
    font-size:1.2rem;
    color:var(--cafe);
  }

  .met-lbl{
    font-size:0.68rem;
    color:#aaa;
    font-family:'Space Mono',monospace;
  }

  .cultivo-footer{
    padding:0.8rem 1.2rem;
    background:#fafaf8;
    display:flex;
    justify-content:space-between;
    align-items:center;
  }

  .cultivo-footer span{
    font-size:0.78rem;
    color:#8a7a70;
  }

  .btn-ver{
    background:none;
    border:1px solid var(--verde);
    color:var(--verde);
    padding:0.3rem 0.8rem;
    border-radius:12px;
    font-size:0.8rem;
    font-weight:700;
    cursor:pointer;
  }

  .btn-ver:hover{
    background:var(--verde);
    color:var(--blanco);
  }

  .vars-section{
    background:var(--blanco);
    border-radius:14px;
    padding:1.5rem;
    box-shadow:0 2px 12px var(--sombra);
  }

  .vars-section h2{
    font-family:'DM Serif Display',serif;
    font-size:1.2rem;
    margin-bottom:1.2rem;
  }

  .vars-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
    gap:1rem;
  }

  .var-item{
    border-radius:10px;
    padding:1rem;
    text-align:center;
  }

  .var-item.t { background:#fff5f2; }
  .var-item.h { background:#f0f8ff; }
  .var-item.ha { background:#f0fff8; }
  .var-item.l { background:#fffdf0; }
  .var-item.ph { background:#faf0ff; }

  .var-icon{
    font-size:2rem;
    margin-bottom:0.4rem;
  }

  .var-name{
    font-weight:700;
    font-size:0.9rem;
    color:var(--cafe);
  }

  .var-rango{
    font-family:'Space Mono',monospace;
    font-size:0.75rem;
    color:#8a7a70;
    margin-top:0.2rem;
  }

  .var-sensor{
    font-size:0.72rem;
    color:var(--verde);
    margin-top:0.3rem;
    font-weight:600;
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
    <a href="sensores.php"><span>📡</span> Sensores</a>
    <a href="cultivos.php" class="active"><span>🌿</span> Cultivos</a>
    <a href="reportes.php"><span>📋</span> Reportes</a>
    <a href="login.php"><span>👤</span> Mi Perfil</a>
  </nav>

  <div class="sidebar-footer">
    <a href="index.php">← Inicio</a>
  </div>

</aside>

<main class="main">

  <div class="topbar">

    <div>
      <h1>Mis Cultivos</h1>
      <p>Gestiona y monitorea todos tus cultivos registrados</p>
    </div>

    <button class="btn-add" onclick="mostrarFormulario()">
      + Nuevo Cultivo
    </button>

  </div>

  <!-- FORMULARIO -->

  <div class="formulario" id="formularioCultivo">

    <h2>🌱 Registrar Nuevo Cultivo</h2>

    <form action="../controlador/guardar_cultivo.php" method="POST">

      <div class="form-grid">

        <input 
          type="text"
          name="nombre"
          placeholder="Nombre del cultivo"
          required
        >

        <input 
          type="text"
          name="tipo"
          placeholder="Tipo de cultivo"
          required
        >

        <input 
          type="text"
          name="ubicacion"
          placeholder="Ubicación"
          required
        >

      </div>

      <button 
        type="submit"
        class="btn-add"
        style="margin-top:1rem;"
      >
        Guardar Cultivo
      </button>

    </form>

  </div>

  <!-- CULTIVOS DINÁMICOS -->

  <div class="cultivos-grid">

  <?php

  $sql = "SELECT * FROM cultivos ORDER BY id DESC";

  $resultado = mysqli_query($conexion,$sql);

  while($fila = mysqli_fetch_assoc($resultado)){

  ?>

    <div class="cultivo-card">

      <div class="cultivo-header">

        <div class="cultivo-emoji">
          🌿
        </div>

        <div class="cultivo-info">

          <h3>
            <?php echo $fila['nombre']; ?>
          </h3>

          <p>
            <?php echo $fila['ubicacion']; ?>
          </p>

        </div>

        <div class="cultivo-estado">
          <span class="badge">
            <?php echo $fila['tipo']; ?>
          </span>
        </div>

      </div>

      <div class="cultivo-metricas">

        <div class="met-item">
          <div class="met-val">24°C</div>
          <div class="met-lbl">Temp.</div>
        </div>

        <div class="met-item">
          <div class="met-val">63%</div>
          <div class="met-lbl">Hum.</div>
        </div>

        <div class="met-item">
          <div class="met-val">6.8</div>
          <div class="met-lbl">pH</div>
        </div>

      </div>

      <div class="cultivo-footer">

  <span>
    📅 Registrado correctamente
  </span>

  <div style="display:flex; gap:0.5rem;">

  <a 
    href="editar_cultivo.php?id=<?php echo $fila['id']; ?>"
    
    style="
    background:#f4a261;
    color:white;
    padding:0.3rem 0.8rem;
    border-radius:12px;
    font-size:0.8rem;
    font-weight:700;
    text-decoration:none;
    display:flex;
    align-items:center;
    "
  >
    ✏️ Editar
  </a>

  <a 
    href="../controlador/eliminar_cultivo.php?id=<?php echo $fila['id']; ?>"
    
    onclick="return confirm('¿Deseas eliminar este cultivo?')"

    style="
    background:#d62828;
    color:white;
    padding:0.3rem 0.8rem;
    border-radius:12px;
    font-size:0.8rem;
    font-weight:700;
    text-decoration:none;
    display:flex;
    align-items:center;
    "
  >
    🗑 Eliminar
  </a>

</div>

    <button class="btn-ver">
      Ver detalle
    </button>

    <a 
      href="../controlador/eliminar_cultivo.php?id=<?php echo $fila['id']; ?>"
      
      onclick="return confirm('¿Deseas eliminar este cultivo?')"

      style="
      background:#d62828;
      color:white;
      padding:0.3rem 0.8rem;
      border-radius:12px;
      font-size:0.8rem;
      font-weight:700;
      text-decoration:none;
      display:flex;
      align-items:center;
      "
    >
      🗑 Eliminar
    </a>

  </div>

</div>

    </div>

  <?php
  }
  ?>

  </div>

  <!-- VARIABLES CRÍTICAS -->

  <div class="vars-section">

    <h2>
      🔬 Variables Ambientales Críticas Identificadas
    </h2>

    <p style="
    font-size:0.85rem;
    color:#8a7a70;
    margin-bottom:1rem;
    ">
      Documentadas mediante entrevistas a ≥3 agricultores y expertos agrícolas
    </p>

    <div class="vars-grid">

      <div class="var-item t">
        <div class="var-icon">🌡️</div>
        <div class="var-name">Temperatura</div>
        <div class="var-rango">Rango: 15°C – 30°C</div>
        <div class="var-sensor">Sensor: DHT22 (T-01)</div>
      </div>

      <div class="var-item h">
        <div class="var-icon">💧</div>
        <div class="var-name">Humedad del Suelo</div>
        <div class="var-rango">Rango: 40% – 80%</div>
        <div class="var-sensor">Sensor: Capacitive v2 (H-01)</div>
      </div>

      <div class="var-item ha">
        <div class="var-icon">🌬️</div>
        <div class="var-name">Humedad del Aire</div>
        <div class="var-rango">Rango: 50% – 75%</div>
        <div class="var-sensor">Sensor: DHT22 (H-02)</div>
      </div>

      <div class="var-item l">
        <div class="var-icon">☀️</div>
        <div class="var-name">Luminosidad</div>
        <div class="var-rango">Rango: 5000 – 12000 lux</div>
        <div class="var-sensor">Sensor: BH1750 (L-01)</div>
      </div>

      <div class="var-item ph">
        <div class="var-icon">🧪</div>
        <div class="var-name">pH del Suelo</div>
        <div class="var-rango">Rango: 5.5 – 7.5</div>
        <div class="var-sensor">Sensor: pH-4502C (P-01)</div>
      </div>

    </div>

  </div>

</main>

<script>

function mostrarFormulario(){

  let form = document.getElementById("formularioCultivo");

  if(form.style.display === "none" || form.style.display === ""){
      form.style.display = "block";
  }else{
      form.style.display = "none";
  }

}

</script>

</body>
</html>