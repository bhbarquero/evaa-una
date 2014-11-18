<?php

	session_start();
	$Correo =$_SESSION["user"];
	
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
		
		$consulta="select u.TipoUsuarioId from tb_usuario u
					where u.CorreoUsuario = '$Correo.'";
		
		if(mysqli_num_rows($resultado=mysqli_query($conexion,$consulta))>0)
		{
						
			$row = mysqli_fetch_row($resultado);
				$retorno = array(
					"TipoMensaje" => 1,
					"TipoUsuario" =>$row[0]);
					
				echo json_encode($retorno);
		}
		else
		{
					
			$retorno = array(
					"TipoMensaje" => 2,
					"Mensaje" => "Error al comprobar el tipo de usuario".mysqli_error($conexion));
				echo json_encode($retorno);
		}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);
?>