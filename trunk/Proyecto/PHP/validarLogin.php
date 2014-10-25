<?php

	$conexion=mysqli_connect("localhost","root","","evaa_bd");
	//COMPROBAR SI HUBO UN ERROR EN LA CONEXION
	if(mysqli_connect_errno())
	{
		echo "2,Error al conectar con la BD. ".mysqli_connect_error();
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
			echo "1,Correo y contraseña válidos.";
		}
		else
		{
			echo "2,Usuario y contraseña inválidos.";
		}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);
?>