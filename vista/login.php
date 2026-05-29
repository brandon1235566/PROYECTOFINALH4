<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>AgroVision | Login</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&family=DM+Serif+Display&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Nunito',sans-serif;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:
    linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
    url('https://images.unsplash.com/photo-1501004318641-b39e6451bec6?q=80&w=1600');
    background-size:cover;
    background-position:center;
}

.login-container{
    width:400px;
    background:rgba(255,255,255,0.12);
    backdrop-filter:blur(14px);
    border:1px solid rgba(255,255,255,0.2);
    border-radius:20px;
    padding:40px;
    box-shadow:0 10px 30px rgba(0,0,0,0.3);
    color:white;
}

.logo{
    text-align:center;
    margin-bottom:30px;
}

.logo h1{
    font-family:'DM Serif Display',serif;
    font-size:42px;
}

.logo span{
    color:#95d5b2;
}

.logo p{
    margin-top:8px;
    color:#ddd;
    font-size:14px;
}

.form-group{
    margin-bottom:20px;
}

.form-group label{
    display:block;
    margin-bottom:8px;
    font-weight:600;
}

.form-group input{
    width:100%;
    padding:14px;
    border:none;
    border-radius:12px;
    outline:none;
    background:rgba(255,255,255,0.15);
    color:white;
    font-size:15px;
}

.form-group input::placeholder{
    color:#ddd;
}

.form-extras{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:20px;
    font-size:14px;
}

.remember{
    display:flex;
    align-items:center;
    gap:6px;
}

.forgot{
    color:#95d5b2;
    text-decoration:none;
}

.forgot:hover{
    text-decoration:underline;
}

.btn-login{
    width:100%;
    padding:14px;
    border:none;
    border-radius:12px;
    background:#2d6a4f;
    color:white;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

.btn-login:hover{
    background:#40916c;
    transform:translateY(-2px);
}

.divider{
    text-align:center;
    margin:25px 0;
    color:#ddd;
}

.btn-demo{
    width:100%;
    padding:14px;
    border:none;
    border-radius:12px;
    background:#95d5b2;
    color:#1b4332;
    font-size:15px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

.btn-demo:hover{
    background:#b7e4c7;
}

.footer{
    text-align:center;
    margin-top:20px;
    font-size:13px;
    color:#ddd;
}

</style>
</head>

<body>

<div class="login-container">

    <div class="logo">
        <h1>Agro<span>Vision</span></h1>
        <p>Sistema Inteligente de Monitoreo Agrícola</p>
    </div>

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
                <input type="checkbox">
                Recordarme
            </label>

            <a href="#" class="forgot">
                ¿Olvidaste tu contraseña?
            </a>

        </div>

        <button type="submit" class="btn-login">
            Ingresar al Sistema →
        </button>

    </form>

    <div class="divider">
        — o —
    </div>

    <button 
        class="btn-demo"
        onclick="window.location.href='dashboard.php'"
    >
        🌱 Ingresar como Demo
    </button>

    <div class="footer">
        AgroVision © 2026
    </div>

</div>

</body>
</html>