<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AgroVisión - Sistema de Monitoreo Agrícola</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Space+Mono:wght@400;700&family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
<style>
  :root {
    --verde: #2d6a4f;
    --verde-claro: #52b788;
    --verde-lima: #95d5b2;
    --tierra: #a3785a;
    --crema: #f5f0e8;
    --cafe: #3d2b1f;
    --blanco: #ffffff;
    --sombra: rgba(45,106,79,0.15);
  }
  * { margin:0; padding:0; box-sizing:border-box; }
  body { font-family: 'Nunito', sans-serif; background: var(--crema); color: var(--cafe); }

  /* NAV */
  nav {
    position: fixed; top:0; width:100%; z-index:100;
    background: rgba(245,240,232,0.95); backdrop-filter: blur(10px);
    border-bottom: 2px solid var(--verde-lima);
    display: flex; align-items:center; justify-content:space-between;
    padding: 0.8rem 2.5rem;
  }
  .logo { display:flex; align-items:center; gap:0.6rem; }
  .logo-icon { width:38px; height:38px; background: var(--verde); border-radius:50% 50% 50% 0; display:flex; align-items:center; justify-content:center; }
  .logo-icon svg { width:22px; height:22px; fill:var(--crema); }
  .logo-text { font-family:'DM Serif Display', serif; font-size:1.5rem; color:var(--verde); }
  .logo-text span { color: var(--tierra); font-style:italic; }
  nav ul { list-style:none; display:flex; gap:2rem; }
  nav ul a { text-decoration:none; color:var(--cafe); font-weight:600; font-size:0.9rem; letter-spacing:0.05em; transition:color 0.2s; }
  nav ul a:hover { color:var(--verde); }
  .nav-btn { background:var(--verde); color:var(--blanco)!important; padding:0.5rem 1.2rem; border-radius:20px; }
  .nav-btn:hover { background:var(--verde-claro)!important; color:var(--blanco)!important; }

  /* HERO */
  .hero {
    min-height:100vh; display:flex; align-items:center;
    background: linear-gradient(135deg, var(--crema) 55%, #d8f3dc 100%);
    padding: 7rem 2.5rem 3rem;
    position: relative; overflow:hidden;
  }
  .hero::before {
    content:''; position:absolute; right:-80px; top:50%; transform:translateY(-50%);
    width:500px; height:500px; border-radius:50%;
    background: radial-gradient(circle, #b7e4c7 0%, transparent 70%);
    pointer-events:none;
  }
  .hero-content { max-width:600px; }
  .hero-badge { display:inline-flex; align-items:center; gap:0.5rem; background:var(--verde-lima); color:var(--verde); font-family:'Space Mono',monospace; font-size:0.75rem; padding:0.35rem 0.9rem; border-radius:20px; margin-bottom:1.5rem; }
  .hero h1 { font-family:'DM Serif Display',serif; font-size:clamp(2.5rem,5vw,4rem); line-height:1.1; color:var(--cafe); margin-bottom:1.2rem; }
  .hero h1 em { color:var(--verde); font-style:italic; }
  .hero p { font-size:1.1rem; line-height:1.7; color:#5a4a3a; max-width:500px; margin-bottom:2rem; }
  .hero-actions { display:flex; gap:1rem; flex-wrap:wrap; }
  .btn-primary { background:var(--verde); color:var(--blanco); border:none; padding:0.8rem 2rem; border-radius:30px; font-family:'Nunito',sans-serif; font-size:1rem; font-weight:700; cursor:pointer; text-decoration:none; display:inline-block; transition:all 0.2s; box-shadow:0 4px 16px var(--sombra); }
  .btn-primary:hover { background:var(--verde-claro); transform:translateY(-2px); }
  .btn-secondary { background:transparent; color:var(--verde); border:2px solid var(--verde); padding:0.8rem 2rem; border-radius:30px; font-family:'Nunito',sans-serif; font-size:1rem; font-weight:700; cursor:pointer; text-decoration:none; display:inline-block; transition:all 0.2s; }
  .btn-secondary:hover { background:var(--verde); color:var(--blanco); }

  /* STATS */
  .stats-bar { background:var(--verde); color:var(--blanco); display:flex; justify-content:center; gap:4rem; padding:1.5rem 2rem; flex-wrap:wrap; }
  .stat { text-align:center; }
  .stat-num { font-family:'DM Serif Display',serif; font-size:2rem; display:block; }
  .stat-label { font-size:0.8rem; opacity:0.8; font-family:'Space Mono',monospace; }

  /* CARACTERÍSTICAS */
  .features { padding:5rem 2.5rem; background:var(--blanco); }
  .section-header { text-align:center; margin-bottom:3.5rem; }
  .section-tag { font-family:'Space Mono',monospace; font-size:0.75rem; color:var(--verde); letter-spacing:0.1em; text-transform:uppercase; }
  .section-header h2 { font-family:'DM Serif Display',serif; font-size:2.5rem; color:var(--cafe); margin-top:0.4rem; }
  .cards { display:grid; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); gap:2rem; max-width:1100px; margin:0 auto; }
  .card { background:var(--crema); border-radius:16px; padding:2rem; border-left:4px solid var(--verde-claro); transition:transform 0.2s, box-shadow 0.2s; }
  .card:hover { transform:translateY(-4px); box-shadow:0 8px 30px var(--sombra); }
  .card-icon { width:48px; height:48px; background:var(--verde); border-radius:12px; display:flex; align-items:center; justify-content:center; margin-bottom:1rem; font-size:1.4rem; }
  .card h3 { font-family:'DM Serif Display',serif; font-size:1.3rem; color:var(--cafe); margin-bottom:0.5rem; }
  .card p { font-size:0.9rem; line-height:1.6; color:#6b5a4e; }

  /* OBJETIVOS */
  .objectives { padding:5rem 2.5rem; background: linear-gradient(180deg, #f5f0e8 0%, #e8f5ee 100%); }
  .obj-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(300px,1fr)); gap:1.5rem; max-width:1100px; margin:0 auto; }
  .obj-item { background:var(--blanco); border-radius:12px; padding:1.5rem; display:flex; gap:1rem; align-items:flex-start; box-shadow:0 2px 12px var(--sombra); }
  .obj-num { width:36px; height:36px; min-width:36px; background:var(--verde); color:var(--blanco); border-radius:50%; display:flex; align-items:center; justify-content:center; font-family:'Space Mono',monospace; font-size:0.85rem; font-weight:700; }
  .obj-content h4 { font-weight:700; color:var(--cafe); margin-bottom:0.3rem; font-size:0.95rem; }
  .obj-content p { font-size:0.83rem; color:#7a6458; line-height:1.5; }
  .obj-level { display:inline-block; margin-top:0.4rem; background:var(--verde-lima); color:var(--verde); font-size:0.72rem; font-family:'Space Mono',monospace; padding:0.15rem 0.5rem; border-radius:8px; }

  /* CTA */
  .cta { background:var(--verde); color:var(--blanco); padding:5rem 2.5rem; text-align:center; }
  .cta h2 { font-family:'DM Serif Display',serif; font-size:2.5rem; margin-bottom:1rem; }
  .cta p { font-size:1.05rem; opacity:0.85; max-width:500px; margin:0 auto 2rem; }
  .cta .btn-primary { background:var(--crema); color:var(--verde); }
  .cta .btn-primary:hover { background:var(--blanco); }

  /* FOOTER */
  footer { background:var(--cafe); color:var(--crema); padding:2rem 2.5rem; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1rem; }
  footer .logo-text { color:var(--crema); }
  footer p { font-size:0.85rem; opacity:0.7; }

  /* Animations */
  @keyframes fadeUp { from { opacity:0; transform:translateY(30px); } to { opacity:1; transform:translateY(0); } }
  .hero-content > * { animation: fadeUp 0.7s ease both; }
  .hero-content > *:nth-child(1) { animation-delay:0.1s; }
  .hero-content > *:nth-child(2) { animation-delay:0.2s; }
  .hero-content > *:nth-child(3) { animation-delay:0.3s; }
  .hero-content > *:nth-child(4) { animation-delay:0.4s; }
  .hero-content > *:nth-child(5) { animation-delay:0.5s; }
</style>
</head>
<body>

<nav>
  <div class="logo">
    <div class="logo-icon">
      <svg viewBox="0 0 24 24"><path d="M17 8C8 10 5.9 16.17 3.82 19.64L5.71 21l1-1.29A4.52 4.52 0 008 20C12 20 12 16 16 16s4 4 8 4v-2c-2 0-4-.5-5.29-1.18C19.56 13.89 20 10 17 8z"/></svg>
    </div>
    <span class="logo-text">Agro<span>Visión</span></span>
  </div>
  <ul>
    <li><a href="index.html">Inicio</a></li>
    <li><a href="dashboard.html">Dashboard</a></li>
    <li><a href="sensores.html">Sensores</a></li>
    <li><a href="cultivos.html">Cultivos</a></li>
    <li><a href="reportes.html">Reportes</a></li>
    <li><a href="login.html" class="nav-btn">Ingresar</a></li>
  </ul>
</nav>

<section class="hero">
  <div class="hero-content">
    <div class="hero-badge">🌱 Sistema Web Integrado con Sensores Ambientales</div>
    <h1>Monitorea tus <em>cultivos</em> en tiempo real</h1>
    <p>AgroVisión integra sensores ambientales con una plataforma web inteligente para registrar, almacenar y visualizar datos de tus cultivos — tomando mejores decisiones agrícolas.</p>
    <div class="hero-actions">
      <a href="dashboard.html" class="btn-primary">Ver Dashboard</a>
      <a href="cultivos.html" class="btn-secondary">Mis Cultivos</a>
    </div>
  </div>
</section>

<div class="stats-bar">
  <div class="stat"><span class="stat-num">>98%</span><span class="stat-label">Tasa de Captura</span></div>
  <div class="stat"><span class="stat-num">±2%</span><span class="stat-label">Precisión Sensores</span></div>
  <div class="stat"><span class="stat-num">5</span><span class="stat-label">Variables Monitoreadas</span></div>
  <div class="stat"><span class="stat-num">&lt;3s</span><span class="stat-label">Tiempo de Consulta</span></div>
</div>

<section class="features">
  <div class="section-header">
    <div class="section-tag">// Características del Sistema</div>
    <h2>Todo lo que necesitas para tu campo</h2>
  </div>
  <div class="cards">
    <div class="card">
      <div class="card-icon">🌡️</div>
      <h3>Sensores Ambientales</h3>
      <p>Monitoreo continuo de temperatura, humedad del suelo y del aire, luminosidad y pH con sensores de alta precisión y durabilidad superior a 12 meses.</p>
    </div>
    <div class="card">
      <div class="card-icon">📊</div>
      <h3>Dashboard en Tiempo Real</h3>
      <p>Visualización gráfica e intuitiva de datos actuales e históricos. Muestreo configurable cada 5, 15 o 30 minutos según tus necesidades.</p>
    </div>
    <div class="card">
      <div class="card-icon">🔔</div>
      <h3>Alertas Inteligentes</h3>
      <p>Recibe notificaciones automáticas cuando los parámetros de tus cultivos se salen de rangos óptimos para actuar a tiempo.</p>
    </div>
    <div class="card">
      <div class="card-icon">📋</div>
      <h3>Reportes Exportables</h3>
      <p>Genera y exporta reportes históricos de todas las mediciones para análisis, planificación y presentación a entidades agrícolas.</p>
    </div>
    <div class="card">
      <div class="card-icon">🗃️</div>
      <h3>Base de Datos Robusta</h3>
      <p>Modelo relacional normalizado (3FN) que garantiza integridad referencial de usuarios, cultivos, sensores, lecturas y alertas.</p>
    </div>
    <div class="card">
      <div class="card-icon">👥</div>
      <h3>Gestión de Usuarios</h3>
      <p>Registro y gestión de múltiples agricultores con acceso personalizado a sus propios cultivos y datos de monitoreo.</p>
    </div>
  </div>
</section>

<section class="objectives">
  <div class="section-header">
    <div class="section-tag">// Objetivos del Proyecto</div>
    <h2>¿Qué logramos con AgroVisión?</h2>
  </div>
  <div class="obj-grid">
    <div class="obj-item">
      <div class="obj-num">1</div>
      <div class="obj-content">
        <h4>Identificación de Variables Críticas</h4>
        <p>Documentamos ≥5 variables ambientales críticas validadas por agricultores y expertos del sector.</p>
        <span class="obj-level">Comprender</span>
      </div>
    </div>
    <div class="obj-item">
      <div class="obj-num">2</div>
      <div class="obj-content">
        <h4>Selección de Sensores</h4>
        <p>Matriz comparativa de ≥3 opciones por variable: precisión ±2%, vida útil >12 meses.</p>
        <span class="obj-level">Evaluar</span>
      </div>
    </div>
    <div class="obj-item">
      <div class="obj-num">3</div>
      <div class="obj-content">
        <h4>Adquisición de Datos en Tiempo Real</h4>
        <p>Sistema con tasa de captura >98% y frecuencia configurable (cada 5, 15 o 30 min).</p>
        <span class="obj-level">Aplicar</span>
      </div>
    </div>
    <div class="obj-item">
      <div class="obj-num">4</div>
      <div class="obj-content">
        <h4>Plataforma Web con Dashboard</h4>
        <p>Registro de usuarios, gestión de cultivos, visualización gráfica y exportación de reportes.</p>
        <span class="obj-level">Crear</span>
      </div>
    </div>
    <div class="obj-item">
      <div class="obj-num">5</div>
      <div class="obj-content">
        <h4>Base de Datos Relacional</h4>
        <p>Modelo normalizado 3FN con tablas para usuarios, cultivos, sensores, lecturas y alertas. Consultas &lt;3s.</p>
        <span class="obj-level">Crear</span>
      </div>
    </div>
    <div class="obj-item">
      <div class="obj-num">6</div>
      <div class="obj-content">
        <h4>Validación con Agricultores</h4>
        <p>≥5 agricultores en pruebas piloto, encuesta de utilidad >80%, identificación de mejoras futuras.</p>
        <span class="obj-level">Evaluar</span>
      </div>
    </div>
  </div>
</section>

<section class="cta">
  <h2>¿Listo para transformar tu campo?</h2>
  <p>Únete a la agricultura del futuro. Monitorea, analiza y decide con datos reales.</p>
  <a href="login.html" class="btn-primary">Comenzar Ahora →</a>
</section>

<footer>
  <div class="logo">
    <span class="logo-text">Agro<span style="color:var(--verde-lima);font-style:italic;">Visión</span></span>
  </div>
  <p>Sistema Web de Monitoreo Agrícola con Sensores Ambientales</p>
  <p style="font-family:'Space Mono',monospace;font-size:0.75rem;opacity:0.5;">v1.0 · 2025</p>
</footer>

</body>
</html>
