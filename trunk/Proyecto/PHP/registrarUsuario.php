<?php

	$conexion=mysqli_connect("localhost","root","","evaa_bd");
	//COMPROBAR SI HUBO UN ERROR EN LA CONEXION
	if(mysqli_connect_errno())
	{
		$retorno = array(
			"TipoMensaje" => 2,
			"Mensaje" => "Error al conectar con la BD. ".mysqli_connect_error());
		echo json_encode($retorno);
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
			$retorno = array(
				"TipoMensaje" => 1,
				"Mensaje" => "Éxito al guardar el usuario. Redirigiendo al login...");
			echo json_encode($retorno);
		}
		else
		{
			$retorno = array(
				"TipoMensaje" => 2,
				"Mensaje" => "Error al guardar el usuario: ".mysqli_error($conexion));
			echo json_encode($retorno);
		}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);


?>