<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cursos del Estudiante - EVAA</title>
<?php
session_start();
if( !isset($_SESSION['user']) ){
	header('location:../HTML/login.php');
}
?>
<link rel="stylesheet" href="../Styles/Master.css">
<link rel="icon" href="../Imagenes/book.png" sizes="16x16" type="image/png">

<link rel="stylesheet" href="../Styles/General.css">
<link rel="stylesheet" href="../Styles/misCursosAlumno.css">

<script src="../Scripts/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../Scripts/misCursosAlumno.js"></script>
</head>

<body>
<div id="divPrincipal"> 
  
  <!-- Ícono de notificación --> 
  <a href="#notif" id="notifLink" class="notif-link"> <span></span> </a>
  <div id="notif"> </div>
  
  <!-- Contenedor Secundario -->
  <div id="main"> 
    <!-- Encabezado -->
    <header>
      <h1 id="titulo">EVAA</h1>
      <h2>MIS CURSOS</h2>
    </header>
    
    <!-- Contenedor Terciario (aquí va el contenido propio de cada página) -->
    <div class="content">
      <div class="evaa-form">
        <h2 class="content-subhead">Filtro:</h2>
        <input type="text" id="NomCurso" placeholder="Nombre Curso" class="evaa-input-rounded">
        &nbsp;
        <input id="Ano"  type="number" min="0" width="20" placeholder="Año" class="evaa-input-rounded">
        <div id="divTablaResultados" class="flexC"> 
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