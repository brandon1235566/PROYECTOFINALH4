<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AgroVisión - Reportes</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Space+Mono:wght@400;700&family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.umd.min.js"></script>
<style>
  :root { --verde:#2d6a4f; --verde-claro:#52b788; --verde-lima:#95d5b2; --tierra:#a3785a; --crema:#f5f0e8; --cafe:#3d2b1f; --blanco:#fff; --sombra:rgba(45,106,79,0.12); --sidebar:220px; }
  * { margin:0; padding:0; box-sizing:border-box; }
  body { font-family:'Nunito',sans-serif; background:#f0f4f1; color:var(--cafe); display:flex; min-height:100vh; }
  .sidebar { width:var(--sidebar); background:var(--verde); min-height:100vh; padding:1.5rem 1rem; display:flex; flex-direction:column; position:fixed; }
  .sidebar-logo { font-family:'DM Serif Display',serif; font-size:1.3rem; color:var(--blanco); margin-bottom:2.5rem; padding-bottom:1.5rem; border-bottom:1px solid rgba(255,255,255,0.15); }
  .sidebar-logo em { color:var(--verde-lima); font-style:italic; }
  .sidebar nav a { display:flex; align-items:center; gap:0.7rem; color:rgba(255,255,255,0.7); text-decoration:none; padding:0.65rem 0.8rem; border-radius:10px; font-size:0.9rem; font-weight:600; margin-bottom:0.3rem; transition:all 0.2s; }
  .sidebar nav a:hover,.sidebar nav a.active { background:rgba(255,255,255,0.15); color:var(--blanco); }
  .sidebar nav a.active { border-left:3px solid var(--verde-lima); }
  .sidebar-footer { margin-top:auto; padding-top:1rem; border-top:1px solid rgba(255,255,255,0.15); }
  .sidebar-footer a { color:rgba(255,255,255,0.6); text-decoration:none; font-size:0.85rem; }
  .main { margin-left:var(--sidebar); flex:1; padding:2rem; }
  .topbar { display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:2rem; }
  .topbar h1 { font-family:'DM Serif Display',serif; font-size:1.8rem; }
  .topbar p { color:#8a7a70; font-size:0.85rem; margin-top:0.2rem; }

  /* FILTROS */
  .filtros { background:var(--blanco); border-radius:14px; padding:1.3rem 1.5rem; box-shadow:0 2px 10px var(--sombra); margin-bottom:1.5rem; display:flex; gap:1rem; align-items:flex-end; flex-wrap:wrap; }
  .filtro-group { display:flex; flex-direction:column; gap:0.3rem; }
  .filtro-group label { font-family:'Space Mono',monospace; font-size:0.72rem; color:#8a7a70; text-transform:uppercase; }
  .filtro-group select, .filtro-group input { border:1px solid #e0d8d0; border-radius:8px; padding:0.5rem 0.8rem; font-family:'Nunito',sans-serif; font-size:0.88rem; color:var(--cafe); background:var(--crema); }
  .btn-generar { background:var(--verde); color:var(--blanco); border:none; padding:0.58rem 1.4rem; border-radius:20px; font-family:'Nunito',sans-serif; font-weight:700; cursor:pointer; font-size:0.9rem; }
  .btn-export { background:var(--tierra); color:var(--blanco); border:none; padding:0.58rem 1.2rem; border-radius:20px; font-family:'Nunito',sans-serif; font-weight:700; cursor:pointer; font-size:0.9rem; }

  /* GRÁFICAS */
  .charts-2col { display:grid; grid-template-columns:1fr 1fr; gap:1.5rem; margin-bottom:1.5rem; }
  .chart-card { background:var(--blanco); border-radius:14px; padding:1.5rem; box-shadow:0 2px 12px var(--sombra); }
  .chart-card h3 { font-family:'DM Serif Display',serif; font-size:1.05rem; color:var(--cafe); margin-bottom:1rem; }

  /* TABLA HIST */
  .hist-table { background:var(--blanco); border-radius:14px; padding:1.5rem; box-shadow:0 2px 12px var(--sombra); }
  .hist-table h3 { font-family:'DM Serif Display',serif; font-size:1.1rem; margin-bottom:1rem; display:flex; justify-content:space-between; align-items:center; }
  table { width:100%; border-collapse:collapse; }
  th { font-family:'Space Mono',monospace; font-size:0.7rem; color:#8a7a70; text-transform:uppercase; padding:0.6rem; border-bottom:2px solid #f0f0f0; text-align:left; }
  td { padding:0.75rem 0.6rem; border-bottom:1px solid #f8f5f2; font-size:0.85rem; }
  tr:hover td { background:#f9fdf9; }
  .val-ok { color:var(--verde); font-weight:700; }
  .val-warn { color:#e07b39; font-weight:700; }
  .badge { display:inline-block; padding:0.15rem 0.5rem; border-radius:8px; font-size:0.7rem; font-family:'Space Mono',monospace; font-weight:700; }
  .badge.ok { background:#d8f3dc; color:var(--verde); }
  .badge.warn { background:#fff3cd; color:#856404; }
  .pag { display:flex; gap:0.4rem; justify-content:flex-end; margin-top:1rem; }
  .pag button { border:1px solid #e0d8d0; background:var(--blanco); border-radius:6px; padding:0.3rem 0.7rem; font-family:'Space Mono',monospace; font-size:0.78rem; cursor:pointer; }
  .pag button.active { background:var(--verde); color:var(--blanco); border-color:var(--verde); }
</style>
</head>
<body>
<aside class="sidebar">
  <div class="sidebar-logo">Agro<em>Visión</em></div>
  <nav>
    <a href="index.html"><span>🏠</span> Inicio</a>
    <a href="dashboard.html"><span>📊</span> Dashboard</a>
    <a href="sensores.html"><span>📡</span> Sensores</a>
    <a href="cultivos.html"><span>🌿</span> Cultivos</a>
    <a href="reportes.html" class="active"><span>📋</span> Reportes</a>
    <a href="login.html"><span>👤</span> Mi Perfil</a>
  </nav>
  <div class="sidebar-footer"><a href="index.html">← Inicio</a></div>
</aside>

<main class="main">
  <div class="topbar">
    <div>
      <h1>Reportes Históricos</h1>
      <p>Exporta y analiza datos históricos de tus cultivos</p>
    </div>
  </div>

  <!-- FILTROS -->
  <div class="filtros">
    <div class="filtro-group">
      <label>Cultivo</label>
      <select><option>Maíz — Parcela Norte</option><option>Papa — Parcela Sur</option><option>Tomate — Invernadero A</option></select>
    </div>
    <div class="filtro-group">
      <label>Variable</label>
      <select><option>Todas</option><option>Temperatura</option><option>Humedad Suelo</option><option>Humedad Aire</option><option>Luminosidad</option><option>pH</option></select>
    </div>
    <div class="filtro-group">
      <label>Desde</label>
      <input type="date" value="2025-03-01">
    </div>
    <div class="filtro-group">
      <label>Hasta</label>
      <input type="date" value="2025-04-30">
    </div>
    <div class="filtro-group">
      <label>Frecuencia</label>
      <select><option>Cada 15 min</option><option>Cada 5 min</option><option>Cada 30 min</option></select>
    </div>
    <button class="btn-generar">📊 Generar</button>
    <button class="btn-export">⬇️ Exportar CSV</button>
  </div>

  <!-- GRÁFICAS HISTÓRICAS -->
  <div class="charts-2col">
    <div class="chart-card">
      <h3>📈 Temperatura — Marzo a Abril</h3>
      <canvas id="chartTemp" height="150"></canvas>
    </div>
    <div class="chart-card">
      <h3>💧 Humedad del Suelo — Marzo a Abril</h3>
      <canvas id="chartHum" height="150"></canvas>
    </div>
  </div>

  <!-- TABLA HISTÓRICA -->
  <div class="hist-table">
    <h3>
      📋 Registros de Medición
      <span style="font-family:'Space Mono',monospace;font-size:0.75rem;color:#8a7a70;">Mostrando 1-10 de 2,847 registros</span>
    </h3>
    <table>
      <thead>
        <tr><th>Fecha/Hora</th><th>Cultivo</th><th>Sensor</th><th>Variable</th><th>Valor</th><th>Estado</th></tr>
      </thead>
      <tbody>
        <tr><td style="font-family:'Space Mono',monospace;font-size:0.78rem;">2025-04-30 14:30</td><td>Maíz — N</td><td>T-01</td><td>🌡️ Temperatura</td><td class="val-ok">24°C</td><td><span class="badge ok">Óptimo</span></td></tr>
        <tr><td style="font-family:'Space Mono',monospace;font-size:0.78rem;">2025-04-30 14:30</td><td>Maíz — N</td><td>H-01</td><td>💧 Hum. Suelo</td><td class="val-ok">63%</td><td><span class="badge ok">Óptimo</span></td></tr>
        <tr><td style="font-family:'Space Mono',monospace;font-size:0.78rem;">2025-04-30 14:30</td><td>Maíz — N</td><td>H-02</td><td>🌬️ Hum. Aire</td><td class="val-warn">78%</td><td><span class="badge warn">Alta</span></td></tr>
        <tr><td style="font-family:'Space Mono',monospace;font-size:0.78rem;">2025-04-30 14:30</td><td>Papa — S</td><td>L-01</td><td>☀️ Luminosidad</td><td class="val-ok">8200 lux</td><td><span class="badge ok">Óptimo</span></td></tr>
        <tr><td style="font-family:'Space Mono',monospace;font-size:0.78rem;">2025-04-30 14:15</td><td>Maíz — N</td><td>T-01</td><td>🌡️ Temperatura</td><td class="val-ok">23.8°C</td><td><span class="badge ok">Óptimo</span></td></tr>
        <tr><td style="font-family:'Space Mono',monospace;font-size:0.78rem;">2025-04-30 14:15</td><td>Maíz — N</td><td>H-01</td><td>💧 Hum. Suelo</td><td class="val-ok">64%</td><td><span class="badge ok">Óptimo</span></td></tr>
        <tr><td style="font-family:'Space Mono',monospace;font-size:0.78rem;">2025-04-30 14:00</td><td>Papa — S</td><td>T-01</td><td>🌡️ Temperatura</td><td class="val-ok">18°C</td><td><span class="badge ok">Óptimo</span></td></tr>
        <tr><td style="font-family:'Space Mono',monospace;font-size:0.78rem;">2025-04-30 14:00</td><td>Papa — S</td><td>H-01</td><td>💧 Hum. Suelo</td><td class="val-ok">71%</td><td><span class="badge ok">Óptimo</span></td></tr>
        <tr><td style="font-family:'Space Mono',monospace;font-size:0.78rem;">2025-04-30 13:45</td><td>Tomate — A</td><td>T-01</td><td>🌡️ Temperatura</td><td class="val-warn">27°C</td><td><span class="badge warn">Alta</span></td></tr>
        <tr><td style="font-family:'Space Mono',monospace;font-size:0.78rem;">2025-04-30 13:45</td><td>Tomate — A</td><td>H-01</td><td>💧 Hum. Suelo</td><td class="val-ok">58%</td><td><span class="badge ok">Óptimo</span></td></tr>
      </tbody>
    </table>
    <div class="pag">
      <button class="active">1</button>
      <button>2</button><button>3</button><button>...</button><button>285</button>
    </div>
  </div>
</main>

<script>
const meses = ['Mar','Abr'];
const dias = Array.from({length:30},(_,i)=>`${i+1}/Mar`).concat(Array.from({length:30},(_,i)=>`${i+1}/Abr`));
const subDias = dias.filter((_,i)=>i%6===0);

const randomData = (base, noise) => subDias.map(()=> +(base + (Math.random()-0.5)*noise*2).toFixed(1));

new Chart(document.getElementById('chartTemp').getContext('2d'),{
  type:'line',
  data:{ labels:subDias, datasets:[{ label:'Temperatura (°C)', data:randomData(22,3), borderColor:'#e76f51', backgroundColor:'rgba(231,111,81,0.08)', tension:0.4, pointRadius:2 }] },
  options:{ responsive:true, plugins:{ legend:{display:false} }, scales:{ x:{ticks:{font:{size:9}}}, y:{ticks:{font:{size:9}}} } }
});

new Chart(document.getElementById('chartHum').getContext('2d'),{
  type:'bar',
  data:{ labels:subDias, datasets:[{ label:'Humedad Suelo (%)', data:randomData(64,10), backgroundColor:'rgba(69,123,157,0.6)', borderRadius:4 }] },
  options:{ responsive:true, plugins:{ legend:{display:false} }, scales:{ x:{ticks:{font:{size:9}}}, y:{ticks:{font:{size:9}}} } }
});
</script>
</body>
</html>
