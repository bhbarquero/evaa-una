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
<!--<link rel="stylesheet" href="../Styles/chosen.min.css">-->
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
<script src="../Scripts/jquery-2.1.1.min.js"></script>
<script src="../Scripts/infoCursoProfesor.js" type="text/javascript"></script>
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
      <h2 id="hs" class="content-subhead">Mi Grupo</h2>
    </header>
    
    <!-- Contenedor Terciario (aquí va el contenido propio de cada página) -->
    <div class="content"><br/>
      <div class="flexC">
        <form id="frmResgistro" class="evaa-form evaa-form-aligned">
          <input type="hidden" id="grupoId" value="<?php echo $_GET['grupoId'] ?>">
          <div class="evaa-control-group">
            <label for="Curso">Curso: </label>
            <select id="cmbCurso" class="chosen-select" data-placeholder="Elija un curso..." required>
            </select>
          </div>
          <div class="evaa-control-group">
            <label for="ano">Año: </label>
            <input type="text" name="Anno" id="Anno" value="" pattern="[0-9]{4}" placeholder="4 dígitos" required>
          </div>
          <div class="evaa-control-group">
            <label for="ciclo">Ciclo: </label>
            <input type="text" name="Ciclo" id="Ciclo" value="" maxlength="4" placeholder="Obligatorio" required>
          </div><br/>
          <div id="diAcciones" class="flexR">
            <button type="submit" id="btnGuardarGrupo" class="evaa-button evaa-button-primary">Guardar</button>
            <a id="btnPromedio" class="evaa-button evaa-button-primary" >Estudiantes </a> <a id="btnAsiganciones" class="evaa-button evaa-button-primary" >Ver Asignaciones </a> </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="../Scripts/Master.js"></script> 
<!--<script src="../Scripts/chosen.jquery.min.js"></script> --> 
<script src="../Scripts/jquery.blockUI.js"></script> 
<script src="../Scripts/jquery.validate.js"></script>
</body>
</html>