<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro de usuario</title>

<!-- Master -->
<link rel="stylesheet" href="../Styles/Master.css">
<script src="../Scripts/jquery-2.1.1.min.js"></script>

<!-- Adicionales -->
<link rel="stylesheet" href="../Styles/General.css">

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
      <h2>MIS CURSOS</h2>
    </header>
    
    <!-- Contenedor Terciario (aquí va el contenido propio de cada página) -->
    <div class="content">
      <br><label><strong>Filtrar Cursos</strong></label>
    	<br><input type="text" id="NomCurso" placeholder="Nombre Curso"> &nbsp; 
        <input id="Ano" onkeypress="return soloNumeros(event)" type="number" placeholder="Año">
        
		<div id="divTablaResultados">
			<!-- Lista la tabla con los cursos del Profesor -->
        </div>
        
		<br><input type="button" value="Nuevo Curso" class="evaa-button evaa-button-primary" onClick=" window.location.href='../HTML/misCursosAlumno.php' ">  
    </div>
  </div>
</div>

<!-- Master --> 
<script src="../Scripts/Master.js"></script> 
<script src="../Scripts/jquery.blockUI.js"></script>
<script src="../Scripts/jquery.validate.js"></script>

<!-- Adicionales -->
<script type="text/javascript" src="../Scripts/misCursosProfesor.js"></script>

</body>
</html>