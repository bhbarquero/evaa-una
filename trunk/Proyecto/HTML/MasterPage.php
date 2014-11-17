<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro de usuario</title>
<?php
session_start();
if( !isset($_SESSION['user']) ){
	header('location:../HTML/login.php');
}
?>
<!-- Master -->
<link rel="stylesheet" href="../Styles/Master.css">
<link rel="icon" href="../Imagenes/book.png" sizes="16x16" type="image/png">
<script src="../Scripts/jquery-2.1.1.min.js"></script>


<!-- Adicionales -->
<link rel="stylesheet" href="../Styles/General.css">


</head>

<body>
<!-- Contenedor Principal -->
<div id="layout"> 
  
  <!-- Ícono de notificación --> 
  <div class="msgContent"><label id="mensaje"></label></div>
  
  <!-- Contenedor Secundario -->
  <div id="main"> 
    <!-- Encabezado -->
    <header>
      <h1>EVAA</h1>
      <h2 class="content-subhead">Mis Cursos</strong></h2>
    </header>
    
    <!-- Contenedor Terciario (aquí va el contenido propio de cada página) -->
    <div class="content">
      
    </div>
  </div>
</div>

<!-- Master --> 
<script src="../Scripts/Master.js"></script> 
<script src="../Scripts/jquery.blockUI.js"></script>
<script src="../Scripts/jquery.validate.js"></script>

<!-- Adicionales -->

</body>
</html>