<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Información del Curso</title>
<?php
session_start();
if( !isset($_SESSION['user']) ){
	header('location:../HTML/login.php');
}
?>
<!-- Master Page-->
<link rel="stylesheet" href="../Styles/Master.css">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
<link rel="stylesheet" href="../Styles/listarAsignaciones.css">

<!-- Adicionales -->
<link rel="stylesheet" href="../Styles/General.css">
<script src="../Scripts/jquery-2.1.1.min.js"></script>
<script src="../Scripts/ListarAsignacionesAlumno.js" type="text/javascript"></script>
</head>

<body>

<!-- Contenedor Principal -->
<div id="divPrincipal"> 
  
  <!-- Menú --> 
  <a href="#menu" id="menuLink" class="menu-link"> <span></span> </a>
  <div id="menu">
    <div class="pure-menu pure-menu-open"> <a class="pure-menu-heading" href="#"><?php echo  $_SESSION['user']?> </a>
      <ul>
        <li id ="aCursos" class="menu-item-divided pure-menu-selected"><a href="#">Mis Cursos</a></li>
        <li id="aPerfil" ><a href="#">Mi Perfil</a></li>
        <li> <a href="#" id="aCerrar">Cerrar Sesión</a> </li>
      </ul>
    </div>
  </div>
  
  <!-- Contenedor Secundario -->
  <div id="main"> 
    <!-- Encabezado -->
    <header>
      <h1 id="titulo">EVAA</h1>
      <h2 id="Curso" class="content-subhead"></strong></h2>
    </header>
    
    <!-- Contenedor Terciario (aquí va el contenido propio de cada página) -->
    <div class="content">
      <div class="evaa-form">
        <h2 class="subtitulo">Asignaciones</h2>
        <div id="divTablaResultados" class="dTabla"> 
          <!-- Lista la tabla con los cursos del Profesor --> 
        </div>
      </div>
    </div>
  </div>
</div>
<script src="../Scripts/Master.js"></script> 
<script src="../Scripts/jquery.blockUI.js"></script> 
<script src="../Scripts/jquery.validate.js"></script>
</body>
</html>