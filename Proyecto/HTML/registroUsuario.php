<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro de usuario</title>

<!-- Master Page-->
<link rel="stylesheet" href="../Styles/Master.css">
<script src="../Scripts/jquery-2.1.1.min.js"></script>

<script src="../Scripts/registroUsuario.js" type="text/javascript"></script>


<!-- Adicionales -->
<link rel="stylesheet" href="../Styles/General.css">

</head>

<body>
<!-- Contenedor Principal -->
<div id="layout"> 
  
  
  <div class="msgContent"></div>
  <!-- Ícono de notificación --> 
  <a href="#notif" id="notifLink" class="notif-link"> <span></span> </a>
  <div id="notif"> </div>
  
  <!-- Contenedor Secundario -->
  <div id="main"> 
    <!-- Encabezado -->
    <header>
      <h1>EVAA</h1>
    </header>
    
    <!-- Contenedor Terciario (aquí va el contenido propio de cada página) -->
    <div class="content">
      <h2 class="content-subhead">Crea tu cuenta</h2>
      <form id="frmResgistro" class="evaa-form evaa-form-stacked" onsubmit="return false">
        <label for="CorreoUsuario">Correo electrónico:</label>
        <input type="email" id="CorreoUsuario" value="" size="32" placeholder="ejemplo@evaa.com" required>
        <label for="Contrasena">Contraseña:</label>
        <input type="password" id="Contrasena" value="" size="32" placeholder="Mínimo 6 caracteres" required>
        <label for="ReContrasena">Redigite su contraseña:</label>
        <input type="password" id="ReContrasena" value="" size="32" required>
        <label for="TipousuarioId" >Tipo de Usuario:</label>
        <select id="TipoUsuarioId">
          <option value="1">Profesor</option>
          <option value="2">Estudiante</option>
        </select>
        <br/>
        <button id="btnRegistrar" class="evaa-button evaa-button-primary">Registrarse </button>
      </form>
    </div>
  </div>
  <div class="notify"><span id="notifyType" class=""></span></div>
</div>

<!-- Master Page--> 
<script src="../Scripts/Master.js"></script>
<script src="../Scripts/jquery.blockUI.js"></script>
<script src="../Scripts/jquery.validate.js"></script>

</body>
</html>