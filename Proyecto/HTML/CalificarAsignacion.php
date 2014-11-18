<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Agregar Estudiantes</title>
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
<script src="../Scripts/calificarNota.js" type="text/javascript"></script>
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
      <h2 class="content-subhead">Calificar Estudiantes</h2>
    </header>
    
    <!-- Contenedor Terciario (aquí va el contenido propio de cada página) -->
    <div class="content"><br/>
		<input type="hidden" id="cedula">
      <input type="hidden" id="asignacionId" value="<?php echo $_GET['asigId'] ?>" >
      <div class="evaa-control-group">
         <div id="divResultado"></div>
        </div>
        
      
      <div class="flexR">
        <div id="diAcciones" class="flexC"> 
       	<input type="text" id="txtNota" style="display:none"> 
        <input value="Calificar" type="button" style="display:none" id="btnBoton">
      </div>
    </div>
  </div>
</div>
<script src="../Scripts/Master.js"></script> 
<script src="../Scripts/jquery.blockUI.js"></script> 
<script src="../Scripts/jquery.validate.js"></script>
</body>
</html>