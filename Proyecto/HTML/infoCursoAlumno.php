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
<link rel="icon" href="../Imagenes/book.png" sizes="16x16" type="image/png">
<link rel="stylesheet" href="../Styles/General.css">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">

<script src="../Scripts/jquery-2.1.1.min.js"></script>
<script src="../Scripts/infoCursoAlumno.js" type="text/javascript"></script>
</head>

<body>

<!-- Contenedor Principal -->
<div id="divPrincipal"> 
  
 <!-- Menú --> 
<a href="#menu" id="menuLink" class="menu-link"> <span></span> </a>
<div id="menu">
  <div class="pure-menu pure-menu-open"> <a class="pure-menu-heading" href="#"><?php echo  $_SESSION['user']?> </a>
    <ul>
      <li id ="aCursos"><a href="#">Mis Cursos</a></li>
      <li id="aPerfil" ><a href="#">Mi Perfil</a></li>
      <li> <a href="#" id="aCerrar">Cerrar Sesión</a> </li>
    </ul>
  </div>
</div>
  
  <!-- Contenedor Secundario -->
  <div class="msgContent">
    <label id="mensaje"></label>
  </div>
  <div id="main"> 
    <!-- Encabezado -->
    <header>
      <h1 id="titulo">EVAA</h1>
      <h2 id ="nombreCurso" class="content-subhead"></h2>
      <label id ="Profesor" class="content-subhead"></label>
      <br/>
      <label id ="Periodo" class="content-subhead"></label>
    </header>
    
    <!-- Contenedor Terciario (aquí va el contenido propio de cada página) -->
    <div class="content"><br/>
      <input type="hidden" id="grupoId" value="<?php echo $_GET['grupId'] ?>">
      <div class="flexR">
        <div id="diAcciones" class="flexC"> <a id="btnAsiganciones" class="evaa-button evaa-button-primary" >Ver Asignaciones </a> </div>
      </div>
    </div>
  </div>
</div>
<script src="../Scripts/Master.js"></script> 
<script src="../Scripts/jquery.blockUI.js"></script> 
<script src="../Scripts/jquery.validate.js"></script>
</body>
</html>