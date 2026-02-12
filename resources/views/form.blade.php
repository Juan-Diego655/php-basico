<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario Animado</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Segoe UI', sans-serif;
}

/* FONDO GRADIENTE ANIMADO */
body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background: linear-gradient(-45deg, #4D81E7, #6C63FF, #3A60E0, #7A5CFF);
    background-size: 400% 400%;
    animation: gradientMove 8s ease infinite;
}

@keyframes gradientMove{
    0%{ background-position: 0% 50%; }
    50%{ background-position: 100% 50%; }
    100%{ background-position: 0% 50%; }
}

/* CONTENEDOR */
.form-container{
    width:380px;
    padding:40px;
    border-radius:20px;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(20px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.25);
    color:white;
}

/* TITULO */
.form-container h2{
    text-align:center;
    margin-bottom:30px;
    font-weight:600;
    letter-spacing:1px;
}

/* INPUTS */
.input-group{
    margin-bottom:20px;
}

.input-group label{
    font-size:14px;
    margin-bottom:6px;
    display:block;
}

.input-group input,
.input-group textarea{
    width:100%;
    padding:12px;
    border-radius:12px;
    border:none;
    outline:none;
    background: rgba(255,255,255,0.2);
    color:white;
    font-size:14px;
    transition: all 0.3s ease;
}

.input-group input::placeholder,
.input-group textarea::placeholder{
    color: rgba(255,255,255,0.7);
}

.input-group input:focus,
.input-group textarea:focus{
    background: rgba(255,255,255,0.3);
    box-shadow: 0 0 12px #6C63FF;
    transform: scale(1.03);
}

textarea{
    resize:none;
    height:100px;
}

/* BOTÓN */
button{
    width:100%;
    padding:13px;
    border:none;
    border-radius:12px;
    font-weight:bold;
    font-size:15px;
    cursor:pointer;
    color:white;
    background: linear-gradient(45deg, #4D81E7, #6C63FF);
    background-size: 200% 200%;
    transition: 0.4s ease;
}

button:hover{
    background-position: right center;
    box-shadow: 0 0 15px #7A5CFF;
    transform: translateY(-3px);
}

</style>
</head>

<body>

<div class="form-container">
    <h2>Contáctame</h2>

   <form action="/store" method="GET">
  <div class="input-group">
    <label for="email">Correo electrónico</label>
    <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required>
  </div>

  <div class="input-group">
    <label for="mensaje">Mensaje</label>
    <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje aquí..." required></textarea>
  </div>

  <button type="submit">Enviar Mensaje</button>
</form>
</div>

</body>
</html>
