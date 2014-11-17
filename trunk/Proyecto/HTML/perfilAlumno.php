<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mi Perfil - EVAA</title>

<?php
session_start();
if( !isset($_SESSION['user']) ){
	header('location:../HTML/login.php');
}
?>

<!-- Master Page-->
<link rel="stylesheet" href="../Styles/Master.css">
<link rel="icon" href="../Imagenes/book.png" sizes="16x16" type="image/png">

<!-- Adicionales -->
<link rel="stylesheet" href="../Styles/General.css">
<script src="../Scripts/jquery-2.1.1.min.js"></script>
<script src="../Scripts/perfilalumno.js" type="text/javascript"></script>
</head>

<body>

<!-- Contenedor Principal -->
<div id="divPrincipal">

<!-- Ícono de notificación --> 
<a href="#notif" id="notifLink" class="notif-link"> <span></span> </a>
<div id="notif"> </div>

<!-- Contenedor Secundario -->
<div class="msgContent">
  <label id="mensaje"></label>
</div>
<div id="main"> 
  <!-- Encabezado -->
  <header>
    <h1 id="titulo">EVAA</h1>
    <h2 class="content-subhead">MI PERFIL</h2>
  </header>
  
  <!-- Contenedor Terciario (aquí va el contenido propio de cada página) -->
  <div class="content"><br/>
    <div class="flexR">
      <form id="frmAlumno" class="evaa-form evaa-form-aligned">
        <div class="evaa-control-group">
          <label for="name">Cédula: </label>
          <input type="text" name="Cedula" id="Cedula" value="" size="32" pattern="[0-9]{9}" placeholder="9 dígitos sin guiones" required>
        </div>
        <div class="evaa-control-group">
          <label for="nombre">Nombre: </label>
          <input type="text" id="Nombre" value="" size="32" placeholder="Obligatorio" required>
        </div>
        <div class="evaa-control-group">
          <label for="apellido">Apellido: </label>
          <input type="text" id="Apellido" value="" size="32" placeholder="Obligatorio" required>
        </div>
        <div class="evaa-control-group">
          <label for="fechaNacimiento">Fecha de Nacimiento: </label>
          <input type="date" id="FechaNacimiento" value="" size="32" placeholder="aaaa/mm/dd" required>
        </div>
        <div class="evaa-control-group">
          <label for="direccion">Dirección </label>
          <input type="text" id="Direccion" value="" size="32" required>
        </div>
        <div class="evaa-control-group">
          <label for="telefonoMovil">Teléfono Móvil: </label>
          <input type="text" id="TelefonoMovil" value="" size="32" required placeholder="8 dígitos sin guiones" pattern="[0-9]{8}">
        </div>
        <div class="evaa-control-group">
          <label for="telefonoFijo">Teléfono Fijo: </label>
          <input type="text" id="TelefonoFijo" value="" size="32" required placeholder="8 dígitos sin guiones" pattern="[0-9]{8}">
        </div>
        <div class="evaa-control-group">
          <label for="especialidad">Fecha de Ingreso: </label>
          <input type="date" id="FechaIngreso" value="" size="32" required placeholder="aaaa/mm/dd">
        </div>
        <br/>
        <div id="diAcciones" class="flexC">
          <button type="submit" id="btnGuardarAlumno" class="evaa-button evaa-button-primary">Guardar</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
<!-- Master --> 
<script src="../Scripts/Master.js"></script> 
<script src="../Scripts/jquery.blockUI.js"></script> 
<script src="../Scripts/jquery.validate.js"></script>
</body>
</html>