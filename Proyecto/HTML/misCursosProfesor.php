<!doctype html>
<html>
<head>
<?php
session_start();
if( !isset($_SESSION['user']) ){
	header('location:../HTML/login.php');
}
?>
<meta charset="utf-8">
<title>Registro de usuario</title>

<!-- Master -->
<link rel="stylesheet" href="../Styles/Master.css">
<link rel="icon" href="../Imagenes/book.png" sizes="16x16" type="image/png">
<script src="../Scripts/jquery-2.1.1.min.js"></script>

<!-- Adicionales -->
<link rel="stylesheet" href="../Styles/General.css">
<link rel="stylesheet" href="../Styles/misCursosProfesor.css">
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
      <h2 class="content-subhead">MIS CURSOS</strong></h2>
    </header>
    
    <!-- Contenedor Terciario (aquí va el contenido propio de cada página) -->
    <div class="content">
      <div class="evaa-form">
        <h2 class="content-subhead">FILTRO:</h2>
        <input type="text" id="NomCurso" placeholder="Nombre Curso" class="evaa-input-rounded">
        &nbsp;
        <input id="Ano" type="number" placeholder="Año" min="0" width="20" class="evaa-input-rounded">
        
      <div id="divTablaResultados" class="flexC"> 
        <!-- Lista la tabla con los cursos del Profesor --> 
      </div>
      <a id="btnNuevoCurso" type="button" href="nuevoCurso.php" class="evaa-button evaa-button-primary">Nuevo Curso</a> </div>
  </div>
</div>

<!-- Master --> 
<script src="../Scripts/Master.js"></script> 
<script src="../Scripts/jquery.blockUI.js"></script> 
<script src="../Scripts/jquery.validate.js"></script> 

<!-- Adicionales --> 
<script type="text/javascript" src="../Scripts/misCursosProfesor.js"></script>
</body>
</html>