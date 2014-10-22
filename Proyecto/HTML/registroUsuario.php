<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro de usuario</title>
<link type="text/css" rel="stylesheet" href="../Styles/General.css">
<link type="text/css" rel="stylesheet" href="../Styles/forms.css">
<link type="text/css" rel="stylesheet" href="../Styles/buttons.css">

<script src="../Scripts/jquery-2.1.1.min.js"></script>
<script src="../Scripts/registroUsuario.js" type="text/javascript"></script>
<script src="../Scripts/General.js" type="text/javascript"></script>
</head>

<body>
<div id="layout"> <a href="#notifications" id="notificationsLink" class="notifications-link"> 
  <!-- Hamburger icon --> 
  <span></span> l</a>
  <div id="notifications">
    <div > <a href="#"></a> </div>
  </div>
  <div id="main">
    <header>
      <h1>EVAA</h1>
    </header>
    <div class="content">
      <h2 class="content-subhead">Crea tu cuenta</h2>
      <form id="frmResgistro" class="pure-form pure-form-stacked">
        <label for="CorreoUsuario">Correo electrónico:</label>
        <input type="email" id="CorreoUsuario" value="" size="32" placeholder="Obligatorio" required>
        <label for="Contrasena">Contraseña:</label>
        <input type="password" id="Contrasena" value="" size="32" required>
        <label for="ReContrasena">Contraseña:</label>
        <input type="password" id="ReContrasena" value="" size="32" required>
        <label for="TipousuarioId" >Tipo de Usuario:</label>
        <select id="TipoUsuarioId">
          <option value="1">Profesor</option>
          <option value="2">Estudiante</option>
        </select>
        <br/>
        <a id="btnRegistrar2" class="pure-button pure-button-primary" >Registrarse </a>
      </form>
    </div>
  </div>
</div>
</body>
</html>