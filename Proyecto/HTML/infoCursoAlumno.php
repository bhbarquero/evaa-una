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
<script src="../Scripts/jquery-2.1.1.min.js"></script>
<script src="../Scripts/infoCursoAlumno.js" type="text/javascript"></script>
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
      <h2 id ="nombreCurso" class="content-subhead"></h2>
    </header>
    
    <!-- Contenedor Terciario (aquí va el contenido propio de cada página) -->
    <div class="content"><br/>
      <div class="flexR">
        <form id="frmCurso" class="evaa-form evaa-form-aligned" >
          <div class="evaa-control-group">
            <label for="name">Curso </label>
            <input type="text" id="Curso" value="" size="32">
          </div>
          <div class="evaa-control-group">
            <label for="name">Profesor </label>
            <input type="text" id="Profesor" value="" size="32">
          </div>
          <div class="evaa-control-group">
            <label for="name">Ciclo </label>
            <input type="text" id="Ciclo" value="" size="32">
          </div>
          <div class="evaa-control-group">
            <label for="name">Año </label>
            <input type="text" id="Anno" value="" size="32">
          </div>
          <br/>
          <div id="diAcciones" class="flexC"> <a id="btnAsiganciones" class="evaa-button evaa-button-primary" >Ver Asignaciones </a> <a id="btnPromedio" class="evaa-button evaa-button-primary" >Promedios </a> </div>
        </form>
        <input type="hidden" id="grupoId" value="<?php echo $_GET['grupId'] ?>"
      </div>
    </div>
  </div>
</div>
<script src="../Scripts/Master.js"></script> 
<script src="../Scripts/jquery.blockUI.js"></script> 
<script src="../Scripts/jquery.validate.js"></script>
</body>
</html>