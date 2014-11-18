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
<script src="../Scripts/agregarEstudiantes.js" type="text/javascript"></script>
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
      <h2 class="content-subhead">Agregar Estudiantes</h2>
    </header>
    
    <!-- Contenedor Terciario (aquí va el contenido propio de cada página) -->
    <div class="content"><br/>

      <input type="hidden" id="GrupoId" value="<?php echo $_GET['grupoId'] ?>" >
      <div class="evaa-control-group">
          <label for="Correo">Correo Estudiante: </label>
          <input type="email" name="Correo" id="Correo" value="" size="32" placeholder="Correo" required>
        </div>
        
      
      <div class="flexR">
        <div id="diAcciones" class="flexC"> 
        <a id="btnAgregar" class="evaa-button evaa-button-primary" >Agregar </a>
      </div>
    </div>
  </div>
</div>
<script src="../Scripts/Master.js"></script> 
<script src="../Scripts/jquery.blockUI.js"></script> 
<script src="../Scripts/jquery.validate.js"></script>
</body>
</html>