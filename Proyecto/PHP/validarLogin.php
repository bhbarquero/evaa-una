<?php

//REGISTRAR la dirección

if(isset($_POST['correo']))
// && isset($_POST['pass']) && isset($_POST['activo']) && isset($_POST['vence']) && isset($_POST['tiempo']))
{
	$conexion=mysqli_connect("localhost","root","","evaa_bd");
	//COMPROBAR SI HUBO UN ERROR EN LA CONEXION
	if(mysqli_connect_errno())
	{
		echo "Error al conectar con la BD. ".mysqli_connect_error();
	}
	else
	{
		$correo=$_POST['correo'];
		$pass=$_POST['pass'];
		
		$consulta="select * from tb_usuario u
					where u.CorreoUsuario = '$correo' and
					u.Contrasena = '$pass'";
		
		if(mysqli_num_rows($resultado=mysqli_query($conexion,$consulta))>0)
		{
			echo "Correo y contraseña válidos.";
		}
		else
		{
			echo "Usuario y contraseña inválidos.";
		}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);
}
else
{echo "Ocurrió un error. Lo siento, intentalo denuevo.";}
?>