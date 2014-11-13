<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Perfil Estudiante</title>

<!-- Master Page-->
<link rel="stylesheet" href="../Styles/Master.css">

<!-- Adicionales -->
<link rel="stylesheet" href="../Styles/General.css">
<script src="../Scripts/jquery-2.1.1.min.js"></script>
<script src="../Scripts/perfilalumno.js" type="text/javascript"></script>
</head>

<body>

<!-- Contenedor Principal -->
<div id="layout">

<!-- Ícono de notificación --> 
<a href="#notif" id="notifLink" class="notif-link"> <span></span> </a>
<div id="notif"> </div>

<!-- Contenedor Secundario -->
<div id="main"> 
  <!-- Encabezado -->
  <header>
    <h1 id="titulo">EVAA</h1>
    <h2 class="content-subhead">MI PERFIL</h2>
  </header>
  
  <!-- Contenedor Terciario (aquí va el contenido propio de cada página) -->
  <div class="content"><br/>
    <div class="flexR">
      <form id="frmAlumno" class="evaa-form evaa-form-aligned" onsubmit="return false">
        <div class="evaa-control-group">
          <label for="name">Cédula: </label>
          <input type="text" id="Cedula" value="" size="32" placeholder="Obligatorio" required>
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
          <input type="date" id="FechaNacimiento" value="" size="32">
        </div>
        <div class="evaa-control-group">
          <label for="direccion">Dirección </label>
          <input type="text" id="Direccion" value="" size="32">
        </div>
        <div class="evaa-control-group">
          <label for="telefonoMovil">Teléfono Móvil: </label>
          <input type="text" id="TelefonoMovil" value="" size="32" required>
        </div>
        <div class="evaa-control-group">
          <label for="telefonoFijo">Teléfono Fijo: </label>
          <input type="text" id="TelefonoFijo" value="" size="32" >
        </div>
        <div class="evaa-control-group">
          <label for="especialidad">Fecha de Ingreso: </label>
          <input type="date" id="FechaIngreso" value="" size="32" required>
        </div>
        <br/>
        <div id="diAcciones" class="flexC">
          <input type="submit" id="btnGuardarAlumno" class="evaa-button evaa-button-primary" value="Guardar">
        </div>
      </form>
      </Ddiv>
    </div>
  </div>
</div>
<!-- Master --> 
<script src="../Scripts/Master.js"></script> 
<script src="../Scripts/jquery.blockUI.js"></script> 
<script src="../Scripts/jquery.validate.js"></script>
</body>
</html>