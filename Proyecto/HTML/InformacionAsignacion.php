<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Información Asignación</title>
<?php
session_start();
if( !isset($_SESSION['user']) ){
	header('location:../HTML/login.php');
}
?>
<!-- Master Page-->
<link rel="stylesheet" href="../Styles/Master.css">
<link rel="icon" href="../Imagenes/book.png" sizes="16x16" type="image/png">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">

<!-- Adicionales -->
<link rel="stylesheet" href="../Styles/General.css">
<script src="../Scripts/jquery-2.1.1.min.js"></script>
<script src="../Scripts/InformacionAsignacion.js" type="text/javascript"></script>
</head>

<body>

<!-- Contenedor Principal -->
<div id="divPrincipal"> 
  
  <!-- Menú --> 
  <a href="#menu" id="menuLink" class="menu-link"> <span></span> </a>
  <div id="menu">
    <div class="pure-menu pure-menu-open"> <a class="pure-menu-heading" href="#"><?php echo  $_SESSION['user']?></a>
      <ul>
        <li id ="aCursos" ><a href="#">Mis Cursos</a></li>
        <li id="aPerfil"><a href="#">Mi Perfil</a></li>
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
      <h2 class="content-subhead">MI ASIGNACION</strong></h2>
    </header>
    
    <!-- Contenedor Terciario (aquí va el contenido propio de cada página) -->
<<<<<<< .mine	<div class="content">
	<h2 class="content-subhead">Información Asignación</h2>
	
  	<form name="form1" class="evaa-form evaa-form-stacked" >
            <label for="name">Descripción </label>
            <input type="text" id="Descripcion" value="" size="32" placeholder="Obligatorio" required>
            <label for="fechaInicio">Fecha de Inicio </label>
        <input type="date" id="FechaInicio" value="" size="32" required>
        <label for="fechaFin">Fecha de Fin</label>
        <input type="date" id="FechaFin" value="" size="32" required>
               <a id="btnInsertarAsignacion" class="evaa-button evaa-button-primary" >Guardar </a> 
               
               <a id="btnEditarAsignacion" class="evaa-button evaa-button-primary" >Editar </a>
               
                 <a id="btnCalificar" class="evaa-button evaa-button-primary" >Calificar </a>
  <!--  <input type="hidden" name="MM_insert" value="form1">-->
  </form>
  <input type="hidden" id="Id" value=<?php echo $_GET['P'] ?>>
  <input type="hidden" id="Guardar" value=<?php echo $_GET['G'] ?>>
=======    <div class="content"> <br/>
      <form id="frmAsignacion" class="evaa-form evaa-form-stacked flexC" enctype="multipart/form-data">
        <div class="evaa-control-group">
          <label for="name">Descripción </label>
          <input type="text" id="Descripcion" value="" size="32" placeholder="Obligatorio" required>
        </div>
        <div class="evaa-control-group">
          <label for="fechaInicio">Fecha de Inicio </label>
          <input type="date" id="FechaInicio" value="" size="32" required>
        </div>
        <div class="evaa-control-group">
          <label for="fechaFin">Fecha de Fin</label>
          <input type="date" id="FechaFin" value="" size="32" required>
        </div>
	<span id="link">
          
          <label id="link"> </label>
</span>
        <label for="fechaFin">Adjuntar archivo:</label>
        <input type="file" name="archivo" id="archivo" value="" size="32">
        <div id="diAcciones" class="flexR">
          <button type="submit" id="btnInsertarAsignacion" class="evaa-button evaa-button-primary" >Guardar </button>
          <a id="btnClificar" class="evaa-button evaa-button-primary" >Calificar</a>
        </div>
        <input type="hidden" name="Id" id="Id" value=<?php echo $_GET['P'] ?>>
        <input type="hidden" id="Guardar" value=<?php echo $_GET['G'] ?>>
      </form>
    </div>
>>>>>>> .theirs  </div>
</div>
<script src="../Scripts/Master.js"></script> 
<script src="../Scripts/jquery.blockUI.js"></script> 
<script src="../Scripts/jquery.validate.js"></script>
</body>
</html>