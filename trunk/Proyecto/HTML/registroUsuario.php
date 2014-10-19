<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro de usuario</title>

<link type="text/css" rel="stylesheet" href="../Styles/General.css">

<script src="../Scripts/jquery-2.1.1.min.js"></script>
<script src="../Scripts/registroUsuario.js" type="text/javascript"></script>

</head>

<body>
<header class="encabezado">
<h1>EVAA</h1>
</header>
<div>
<form id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Correo electrónico:</td>
      <td><input type="text" id="CorreoUsuario" value="" size="32" required></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Contraseña:</td>
      <td><input type="text" id="Contrasena" value="" size="32" required></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Tipo de Usuario:</td>
      <td><select id="TipoUsuarioId">
        <option value="1">Profesor</option>
        <option value="2">Estudiante</option>
      </select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><a id="btnRegistrar2">Insertar registro </a></td>
    </tr>
  </table>
</form>
</div>
</body>
</html>