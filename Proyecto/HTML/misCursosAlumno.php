<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mis cursos - EVAA</title>
<?php
session_start();
if( !isset($_SESSION['user']) ){
	header('location:../HTML/login.php');
}
?>
<link rel="stylesheet" href="../Styles/Master.css">
<link rel="icon" href="../Imagenes/book.png" sizes="16x16" type="image/png">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
<link rel="stylesheet" href="../Styles/General.css">
<link rel="stylesheet" href="../Styles/misCursosAlumno.css">
<script src="../Scripts/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../Scripts/misCursosAlumno.js"></script>
</head>

<body>
<div id="divPrincipal"> 
  
  <!-- Menú --> 
  <a href="#menu" id="menuLink" class="menu-link"> <span></span> </a>
  <div id="menu">
    <div class="pure-menu pure-menu-open"> <a class="pure-menu-heading" href="#"><?php echo  $_SESSION['user']?></a>
      <ul>
        <li id ="aCursos" class="menu-item-divided pure-menu-selected"><a href="#">Mis Cursos</a></li>
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
      <h2>MIS CURSOS</h2>
    </header>
    
    <!-- Contenedor Terciario (aquí va el contenido propio de cada página) -->
    <div class="content">
      <div class="evaa-form">
        <h2 class="subtitulo">Búsqueda:</h2>
        <input type="text" id="NomCurso" placeholder="Nombre Curso" class="evaa-input-rounded">
        &nbsp;
        <input id="Ano"  type="text" min="0"  placeholder="Año" class="evaa-input-rounded">
        <div id="divTablaResultados" class="dTabla"> 
          <!-- Lista la tabla con los cursos de estudiante --> 
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