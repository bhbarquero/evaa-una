<?php


	session_start();
	$Correo = $_SESSION['user'];
	
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
		$Cedula=$_POST['cedula'];		
		$Nombre=$_POST['nombre'];
		$Apellido=$_POST['apellido'];
		$FechaNacimiento=$_POST['fechanacimiento'];
		$Direccion=$_POST['direccion'];
		$TelefonoFijo=$_POST['telefonofijo'];
		$TelefonoMovil=$_POST['telefonomovil'];
		$Especialidad=$_POST['especialidad'];
		
			$consulta="UPDATE tb_persona SET 
			Cedula='".$Cedula."',
			Nombre='".$Nombre."', 
			Apellido='".$Apellido."',
			FechaNacimiento='".$FechaNacimiento."',
			Direccion='".$Direccion."',
			TelefonoFijo=".$TelefonoFijo.",
 			TelefonoMovil =".$TelefonoMovil."
			WHERE CorreoUsuario='".$Correo."'";
			
	if($resultado=mysqli_query($conexion,$consulta))
		{
			$consulta2="UPDATE tb_profesor SET
				Especialidad='".$Especialidad."'
				Where Cedula='".$Cedula."'";	
			if($resultado2=mysqli_query($conexion,$consulta2))
			{
			
				$retorno = array(
					"TipoMensaje" => 1,
					"Mensaje" => "Perfil gurdado con éxito");
				echo json_encode($retorno);
				
			}
			else
			{
				$retorno = array(
					"TipoMensaje" => 2,
					"Mensaje" => "Error al guardar el perfil. ".mysqli_error($consulta));
				echo json_encode($retorno);
			}
		}
		else
		{
			$retorno = array(
				"TipoMensaje" => 2,
				"Mensaje" => "Error al guardar el perfil.. ".mysqli_error($consulta));
			echo json_encode($retorno);
		}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);

?>