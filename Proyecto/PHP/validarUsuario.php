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
		
		$consulta="select u.TipoUsuarioId from tb_usuario u
					where u.CorreoUsuario = '$correo' and
					u.Contrasena = '$pass'";
		
		if(mysqli_num_rows($resultado=mysqli_query($conexion,$consulta))>0)
		{
			session_start();
			$_SESSION["user"]="$correo";
			//echo "Favorite color is " . $_SESSION["user"] . ".<br>";
			
			$row = mysqli_fetch_row($resultado);
				$retorno = array(
					"TipoMensaje" => 1,
					"Mensaje" => "Correo y contraseña válidos",
					"TipoUsuario" =>$row[0]);
					
				echo json_encode($retorno);
		}
		else
		{
					
			$retorno = array(
					"TipoMensaje" => 2,
					"Mensaje" => "Correo y contraseña inválidos");
				echo json_encode($retorno);
		}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);
?>