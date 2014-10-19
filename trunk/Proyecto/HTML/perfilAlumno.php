
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<link type="text/css" rel="stylesheet" href="../Styles/General.css">

<script src="../Scripts/jquery-2.1.1.min.js"></script>
<script src="../Scripts/perfilalumno.js" type="text/javascript"></script>

</head>

<body>
<header class="encabezado">Evaa
</header>
<div id="">
  <form method="post" name="form1" >
    <table align="center">
      <tr valign="baseline">
        <td nowrap align="right">Cedula:</td>
        <td><input type="text" id="Cedula" value="" size="32" required></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Nombre:</td>
        <td><input type="text" id="Nombre" value="" size="32" required></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Apellido:</td>
        <td><input type="text" id="Apellido" value="" size="32" required></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">FechaNacimiento:</td>
        <td><input type="date" id="FechaNacimiento" value="" size="32" required></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Direccion:</td>
        <td><input type="text" id="Direccion" value="" size="32" required></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Telefono Fijo:</td>
        <td><input type="text" id="TelefonoFijo" value="" size="32" required></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Telefono Movil:</td>
        <td><input type="text" id="TelefonoMovil" value="" size="32" required></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Fecha Ingreso:</td>
        <td><input type="date" id="FechaIngreso" value="" size="32" required></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">&nbsp;</td>
        <td><a id="btnInsertarAlumno"> Insertar registro</a></td>
      </tr>
    </table>
    <input type="hidden" name="MM_insert" value="form1">
  </form>
  <p>&nbsp;</p>
  
  
  
</div>


<footer>
</footer>
</body>
</html>