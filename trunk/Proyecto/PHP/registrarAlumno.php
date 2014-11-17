<?php

	session_start();
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
		$FechaIngreso=$_POST['fechaingreso'];
		$Correo =$_SESSION['user'];
		
		$consulta="insert into tb_persona
			(
				Cedula,
				Nombre,
				Apellido,
				FechaNacimiento,
				Direccion,
				TelefonoFijo,
				TelefonoMovil,
				CorreoUsuario		
			)
			values
			(
				'$Cedula',
				'$Nombre',
				'$Apellido',
				'$FechaNacimiento',
				'$Direccion',
				'$TelefonoFijo',
				'$TelefonoMovil',
				'$Correo'
							
			);
		";
		
		$consulta1="insert into tb_estudiante
			(
				Cedula,
				FechaIngreso
			)
			values
			(
				'$Cedula',
				'$FechaIngreso'			
			);
			";
		
		if($resultado=mysqli_query($conexion,$consulta))
		{
			if(($resultado1=mysqli_query($conexion,$consulta1))){
				$retorno = array(
						"TipoMensaje" => 1,
						"Mensaje" => "Perfil gurdado con éxito");
					echo json_encode($retorno);
			}
			else
			{
				$retorno = array(
					"TipoMensaje" => 2,
					"Mensaje" => "Error al guardar el perfil. ".mysqli_error($conexion));
				echo json_encode($retorno);
			}
		}
		else
		{
			$retorno = array(
				"TipoMensaje" => 2,
				"Mensaje" => "Error al guardar el perfil. ".mysqli_error($conexion));
			echo json_encode($retorno);
		}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);
?>