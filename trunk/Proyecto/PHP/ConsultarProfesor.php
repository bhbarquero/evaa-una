<?php

	session_start();
	$Correo=$_SESSION['user'];
	
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
		
		$consulta="SELECT tb_persona.*,tb_profesor.Especialidad  
				  from tb_persona 
				  inner join tb_profesor on tb_persona.cedula=tb_profesor.cedula 
				  where tb_persona.CorreoUsuario='".$Correo."'";
		
	     
			
	if($resultado=mysqli_query($conexion,$consulta))
		{
			if(mysqli_num_rows($resultado=mysqli_query($conexion,$consulta))>0){
				while ($resEst = mysqli_fetch_assoc($resultado)) {
					$retorno = array(
						"TipoMensaje" => 1,
						"Cedula" =>$resEst['Cedula'],
						"Nombre" => $resEst['Nombre'],
						"Apellido" => $resEst['Apellido'],
						"FechaNac" => $resEst['FechaNacimiento'],
						"Direccion" => $resEst['Direccion'],
						"TelefonoFijo" => $resEst['TelefonoFijo'],
						"TelefonoMovil" => $resEst['TelefonoMovil'],
						"Especialidad" => $resEst['Especialidad']);
						
					echo json_encode($retorno);
					
				}
			}
			else{
				$retorno = array(
					"TipoMensaje" => 3,
					"Mensaje" => $Correo,
				);
				echo json_encode($retorno);
			}
			
		}
		else
		{
			$retorno = array(
				"TipoMensaje" => 1,
				"Mensaje" => "Error al Cargar los datos. ".mysqli_error($conexion)
			);
			echo json_encode($retorno);
		}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);
	
?>