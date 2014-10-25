<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Información del Curso</title>

<!-- Master Page-->
<link rel="stylesheet" href="../Styles/Master.css">

<!-- Adicionales -->
<link rel="stylesheet" href="../Styles/General.css">


<script src="../Scripts/jquery-2.1.1.min.js"></script>
<script src="../Scripts/InformacionCurso.js" type="text/javascript"></script>

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
      		<h1>EVAA</h1>
    	</header>
    
    <!-- Contenedor Terciario (aquí va el contenido propio de cada página) -->
	<div class="content">
	<h2 class="content-subhead">Información del Curso</h2>
	
  	<form name="form1" class="evaa-form evaa-form-stacked" >
            <label for="name">Curso </label>
            <input type="text" id="Curso" value="" size="32">
            
            <label for="name">Profesor </label>
            <input type="text" id="Profesor" value="" size="32">
            
            <label for="name">Ciclo </label>
            <input type="text" id="Ciclo" value="" size="32">
            
            <label for="name">Año </label>
            <input type="text" id="Anno" value="" size="32">
            
            
           <a id="btnAsiganciones" class="evaa-button evaa-button-primary" >Ver Asignaciones </a> 
           
           <a id="btnPromedio" class="evaa-button evaa-button-primary" >Promedios </a>
  <!--  <input type="hidden" name="MM_insert" value="form1">-->
  </form>
  </div>
  </div>
</div>
  
  

		


<footer>
</footer>
</body>
</html>