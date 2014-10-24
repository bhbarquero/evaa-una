
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Perfil Profesor</title>

<!-- Master Page-->
<link rel="stylesheet" href="../Styles/Master.css">

<!-- Adicionales -->
<link rel="stylesheet" href="../Styles/General.css">

<!--<link type="text/css" rel="stylesheet" href="../Styles/General.css">-->

<script src="../Scripts/jquery-2.1.1.min.js"></script>
<script src="../Scripts/perfilprofesor.js" type="text/javascript"></script>

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
	<h2 class="content-subhead">Perfil Profesor</h2>
	
  	<form name="form1" class="evaa-form evaa-form-stacked" >
            <label for="name">Cédula </label>
            <input type="text" id="Cedula" value="" size="32" placeholder="Obligatorio" required>
            <label for="nombre">Nombre </label>
        <input type="text" id="Nombre" value="" size="32" required>
        <label for="apellido">Apellido </label>
        <input type="text" id="Apellido" value="" size="32" required>
        <label for="fechaNacimiento">Fecha de Nacimiento </label>
      	<input type="date" id="FechaNacimiento" value="" size="32" required>
        <label for="direccion">Dirección </label>
     	 <input type="text" id="Direccion" value="" size="32" required>
         <label for="telefonoFijo">Teléfono Fijo </label>
     	 <input type="text" id="TelefonoFijo" value="" size="32" required>
         <label for="telefonoMovil">Teléfono Móvil </label>
     	 <input type="text" id="TelefonoMovil" value="" size="32" required>
         <label for="especialidad">Especialidad </label>
     	 <input type="text" id="Especialidad" value="" size="32" required>
               <a id="btnInsertarProfesor" class="evaa-button evaa-button-primary" >Registrarse </a> 
               
               <a id="btnEditarProfesor" class="evaa-button evaa-button-primary" >Editar </a>
  <!--  <input type="hidden" name="MM_insert" value="form1">-->
  </form>
  
  <input id="pruebaTxt" value="c@" type="text">
  <a id="pruebaBtn" class="evaa-button evaa-button-primary">Buscar</a>
  
  </div>
  </div>
</div>
  
  

		


<footer>
</footer>
</body>
</html>