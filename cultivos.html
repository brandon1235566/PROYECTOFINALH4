<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AgroVisión - Cultivos</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Space+Mono:wght@400;700&family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
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
  .btn-add { background:var(--verde); color:var(--blanco); border:none; padding:0.6rem 1.4rem; border-radius:20px; font-family:'Nunito',sans-serif; font-weight:700; cursor:pointer; font-size:0.9rem; }

  /* CULTIVOS GRID */
  .cultivos-grid { display:grid; grid-template-columns:repeat(auto-fill,minmax(300px,1fr)); gap:1.5rem; margin-bottom:2rem; }
  .cultivo-card { background:var(--blanco); border-radius:16px; overflow:hidden; box-shadow:0 2px 12px var(--sombra); transition:transform 0.2s; }
  .cultivo-card:hover { transform:translateY(-3px); }
  .cultivo-header { padding:1.2rem; display:flex; align-items:center; gap:1rem; }
  .cultivo-emoji { width:52px; height:52px; border-radius:14px; display:flex; align-items:center; justify-content:center; font-size:1.8rem; }
  .maiz .cultivo-emoji { background:#fff3cd; }
  .papa .cultivo-emoji { background:#e8f5e9; }
  .tomate .cultivo-emoji { background:#ffebee; }
  .cultivo-info h3 { font-family:'DM Serif Display',serif; font-size:1.1rem; }
  .cultivo-info p { font-size:0.8rem; color:#8a7a70; }
  .cultivo-estado { margin-left:auto; }
  .badge { display:inline-block; padding:0.2rem 0.6rem; border-radius:10px; font-size:0.72rem; font-weight:700; font-family:'Space Mono',monospace; }
  .badge.crecimiento { background:#d8f3dc; color:var(--verde); }
  .badge.floracion { background:#e8f4fd; color:#1565c0; }
  .badge.cosecha { background:#fff3e0; color:#e65100; }

  .cultivo-metricas { display:grid; grid-template-columns:repeat(3,1fr); border-top:1px solid #f0ebe5; }
  .met-item { padding:0.8rem; text-align:center; border-right:1px solid #f0ebe5; }
  .met-item:last-child { border-right:none; }
  .met-val { font-family:'DM Serif Display',serif; font-size:1.2rem; color:var(--cafe); }
  .met-lbl { font-size:0.68rem; color:#aaa; font-family:'Space Mono',monospace; }

  .cultivo-footer { padding:0.8rem 1.2rem; background:#fafaf8; display:flex; justify-content:space-between; align-items:center; }
  .cultivo-footer span { font-size:0.78rem; color:#8a7a70; }
  .btn-ver { background:none; border:1px solid var(--verde); color:var(--verde); padding:0.3rem 0.8rem; border-radius:12px; font-size:0.8rem; font-weight:700; cursor:pointer; transition:all 0.15s; }
  .btn-ver:hover { background:var(--verde); color:var(--blanco); }

  /* VARIABLES CRÍTICAS */
  .vars-section { background:var(--blanco); border-radius:14px; padding:1.5rem; box-shadow:0 2px 12px var(--sombra); }
  .vars-section h2 { font-family:'DM Serif Display',serif; font-size:1.2rem; margin-bottom:1.2rem; }
  .vars-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:1rem; }
  .var-item { border-radius:10px; padding:1rem; text-align:center; }
  .var-item.t { background:#fff5f2; }
  .var-item.h { background:#f0f8ff; }
  .var-item.ha { background:#f0fff8; }
  .var-item.l { background:#fffdf0; }
  .var-item.ph { background:#faf0ff; }
  .var-icon { font-size:2rem; margin-bottom:0.4rem; }
  .var-name { font-weight:700; font-size:0.9rem; color:var(--cafe); }
  .var-rango { font-family:'Space Mono',monospace; font-size:0.75rem; color:#8a7a70; margin-top:0.2rem; }
  .var-sensor { font-size:0.72rem; color:var(--verde); margin-top:0.3rem; font-weight:600; }
</style>
</head>
<body>
<aside class="sidebar">
  <div class="sidebar-logo">Agro<em>Visión</em></div>
  <nav>
    <a href="index.html"><span>🏠</span> Inicio</a>
    <a href="dashboard.html"><span>📊</span> Dashboard</a>
    <a href="sensores.html"><span>📡</span> Sensores</a>
    <a href="cultivos.html" class="active"><span>🌿</span> Cultivos</a>
    <a href="reportes.html"><span>📋</span> Reportes</a>
    <a href="login.html"><span>👤</span> Mi Perfil</a>
  </nav>
  <div class="sidebar-footer"><a href="index.html">← Inicio</a></div>
</aside>

<main class="main">
  <div class="topbar">
    <div>
      <h1>Mis Cultivos</h1>
      <p>Gestiona y monitorea todos tus cultivos registrados</p>
    </div>
    <button class="btn-add">+ Nuevo Cultivo</button>
  </div>

  <div class="cultivos-grid">
    <!-- MAÍZ -->
    <div class="cultivo-card maiz">
      <div class="cultivo-header">
        <div class="cultivo-emoji">🌽</div>
        <div class="cultivo-info">
          <h3>Maíz</h3>
          <p>Parcela Norte · 0.5 ha · Siembra: 01/03/2025</p>
        </div>
        <div class="cultivo-estado"><span class="badge crecimiento">Crecimiento</span></div>
      </div>
      <div class="cultivo-metricas">
        <div class="met-item"><div class="met-val">24°C</div><div class="met-lbl">Temp.</div></div>
        <div class="met-item"><div class="met-val">63%</div><div class="met-lbl">Hum. Suelo</div></div>
        <div class="met-item"><div class="met-val">6.8</div><div class="met-lbl">pH</div></div>
      </div>
      <div class="cultivo-footer">
        <span>📅 Cosecha estimada: Junio 2025</span>
        <button class="btn-ver">Ver detalle</button>
      </div>
    </div>

    <!-- PAPA -->
    <div class="cultivo-card papa">
      <div class="cultivo-header">
        <div class="cultivo-emoji">🥔</div>
        <div class="cultivo-info">
          <h3>Papa</h3>
          <p>Parcela Sur · 0.3 ha · Siembra: 15/02/2025</p>
        </div>
        <div class="cultivo-estado"><span class="badge floracion">Floración</span></div>
      </div>
      <div class="cultivo-metricas">
        <div class="met-item"><div class="met-val">18°C</div><div class="met-lbl">Temp.</div></div>
        <div class="met-item"><div class="met-val">71%</div><div class="met-lbl">Hum. Suelo</div></div>
        <div class="met-item"><div class="met-val">5.9</div><div class="met-lbl">pH</div></div>
      </div>
      <div class="cultivo-footer">
        <span>📅 Cosecha estimada: Mayo 2025</span>
        <button class="btn-ver">Ver detalle</button>
      </div>
    </div>

    <!-- TOMATE -->
    <div class="cultivo-card tomate">
      <div class="cultivo-header">
        <div class="cultivo-emoji">🍅</div>
        <div class="cultivo-info">
          <h3>Tomate</h3>
          <p>Invernadero A · 0.1 ha · Siembra: 10/01/2025</p>
        </div>
        <div class="cultivo-estado"><span class="badge cosecha">Cosecha</span></div>
      </div>
      <div class="cultivo-metricas">
        <div class="met-item"><div class="met-val">26°C</div><div class="met-lbl">Temp.</div></div>
        <div class="met-item"><div class="met-val">58%</div><div class="met-lbl">Hum. Suelo</div></div>
        <div class="met-item"><div class="met-val">6.5</div><div class="met-lbl">pH</div></div>
      </div>
      <div class="cultivo-footer">
        <span>📅 Listo para cosechar</span>
        <button class="btn-ver">Ver detalle</button>
      </div>
    </div>
  </div>

  <!-- VARIABLES CRÍTICAS -->
  <div class="vars-section">
    <h2>🔬 Variables Ambientales Críticas Identificadas</h2>
    <p style="font-size:0.85rem;color:#8a7a70;margin-bottom:1rem;">Documentadas mediante entrevistas a ≥3 agricultores y expertos agrícolas</p>
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
</body>
</html>
