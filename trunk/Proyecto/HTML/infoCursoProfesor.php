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
<script src="../Scripts/infoCursoProfesor.js" type="text/javascript"></script>
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
      <label id ="Periodo" class="content-subhead"></label>
    </header>
    
    <!-- Contenedor Terciario (aquí va el contenido propio de cada página) -->
    <div class="content"><br/>
      <input type="hidden" id="grupoId" value="<?php echo $_GET['grupoId'] ?>">
      
     <div class="evaa-control-group">
      <label for="Curso">Curso: </label>
     	<select id="cmbCurso">
        </select>
     </div>
      
      <div class="evaa-control-group">
          <label for="ano">Año: </label>
          <input type="text" name="Anno" id="Anno" value="" size="32" pattern="[0-9]{4}" placeholder="4 dígitos sin guiones" required>
        </div>
        
        <div class="evaa-control-group">
          <label for="ciclo">Ciclo: </label>
          <input type="text" name="Ciclo" id="Ciclo" value="" size="32"  required>
        </div>
      
      <div class="flexR">
        <div id="diAcciones" class="flexC"> 
        <a id="btnAgregar" class="evaa-button evaa-button-primary" >Agregar </a>
        <a id="btnEditar" class="evaa-button evaa-button-primary" >Editar </a>
        <a id="btnPromedio" class="evaa-button evaa-button-primary" >Estudiantes </a>
         <a id="btnAsiganciones" class="evaa-button evaa-button-primary" >Ver Asignaciones </a> </div>
      </div>
    </div>
  </div>
</div>
<script src="../Scripts/Master.js"></script> 
<script src="../Scripts/jquery.blockUI.js"></script> 
<script src="../Scripts/jquery.validate.js"></script>
</body>
</html>