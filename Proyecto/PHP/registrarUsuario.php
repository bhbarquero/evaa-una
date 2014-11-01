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
		$tipo=$_POST['tipo'];
		
		$consulta="insert into tb_usuario
			(
				CorreoUsuario,
				Contrasena,
				TipoUsuarioId
			)
			values
			(
				'$correo',
				'$pass',
				'$tipo'	
			);
		";
		
		if($resultado=mysqli_query($conexion,$consulta))
		{
			echo "1,Éxito al guardar el usuario. Redirigiendo al login...";
		}
		else
		{
			echo "2,Error al guardar el usuario: ".mysqli_connect_error();
		}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);


?>