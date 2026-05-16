<!-- LOGIN -->
<div id="panel-login">

<form action="../controlador/validar_login.php" method="POST">

  <div class="form-group">
    <label>Correo Electrónico</label>
    <input 
      type="email" 
      name="correo"
      placeholder="agricultor@ejemplo.com"
      required
    >
  </div>

  <div class="form-group">
    <label>Contraseña</label>
    <input 
      type="password" 
      name="password"
      placeholder="••••••••"
      required
    >
  </div>

  <div class="form-extras">
    <label class="remember">
      <input type="checkbox"> Recordarme
    </label>

    <a href="#" class="forgot">
      ¿Olvidaste tu contraseña?
    </a>
  </div>

  <button type="submit" class="btn-login">
    Ingresar al Sistema →
  </button>

</form>

<div class="divider">— o —</div>

<button 
  class="btn-demo" 
  onclick="window.location.href='dashboard.php'"
>
  🌱 Ingresar como Demo
</button>

</div>