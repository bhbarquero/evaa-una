
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Perfil Profesor</title>

<link type="text/css" rel="stylesheet" href="../Styles/General.css">

<script src="../Scripts/jquery-2.1.1.min.js"></script>
<script src="../Scripts/perfilprofesor.js" type="text/javascript"></script>

</head>

<body>
<header class="encabezado">Evaa
</header>
<div id="">
  <form method="post" name="form1" >
  		<div class="pure-control-group">
            <label for="name">Cédula </label>
            <input type="text" id="Cedula" value="" size="32"  required>
        </div>
        <input type="text" id="Nombre" value="" size="32" required>
        <input type="text" id="Apellido" value="" size="32" required>
      	<input type="date" id="FechaNacimiento" value="" size="32" required>
     	 <input type="text" id="Direccion" value="" size="32" required>
     	 <input type="text" id="TelefonoFijo" value="" size="32" required>
     	 <input type="text" id="TelefonoMovil" value="" size="32" required>
     	 <input type="text" id="Especialidad" value="" size="32" required>
     	 <a id="btnInsertarProfesor"> Insertar</a>
  <!--  <input type="hidden" name="MM_insert" value="form1">-->
  </form>
  
  <input id="pruebaTxt" type="text">
  <a id="pruebaBtn">Buscar</a>
</div>
		


<footer>
</footer>
</body>
</html>