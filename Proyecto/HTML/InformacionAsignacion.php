
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Información Asignación</title>

<!-- Master Page-->
<link rel="stylesheet" href="../Styles/Master.css">

<!-- Adicionales -->
<link rel="stylesheet" href="../Styles/General.css">

<!--<link type="text/css" rel="stylesheet" href="../Styles/General.css">-->

<script src="../Scripts/jquery-2.1.1.min.js"></script>
<script src="../Scripts/InformacionAsignacion.js" type="text/javascript"></script>

</head>

<body>
<?php
		$var1=$_GET['AsignacionId']
	?>

<!-- Contenedor Principal -->
<div id="layout"> 
  
  <!-- Ícono de notificación --> 
  <a href="#notif" id="notifLink" class="notif-link"> <span></span> </a>
  <div id="notif"> </div>
  
  <!-- Contenedor Secundario -->
  <div id="main"> 
    	<!-- Encabezado -->
    	<header>
      		<h1>EVAA</h1>
    	</header>
    
    <!-- Contenedor Terciario (aquí va el contenido propio de cada página) -->
	<div class="content">
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
  <!--  <input type="hidden" name="MM_insert" value="form1">-->
  </form>
  
  </div>
  </div>
</div>
  
  
    
		


<footer>
</footer>
</body>
</html>