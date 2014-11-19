<?php

	$conexion=mysqli_connect("localhost","root","","evaa_bd");
	
	$Grupo=$_POST['grupoid'];
	$Correo=$_POST['correo'];
	//COMPROBAR SI HUBO UN ERROR EN LA CONEXION

	if(!$conexion)
	{
		$retorno = array(
			"TipoMensaje" => 2,
			"Mensaje" => "Error al conectar con la BD. ".mysqli_connect_error());
		echo json_encode($retorno);
	}
	else
	{
		try{
							
			$consulta="INSERT INTO tb_matricula
					   (CorreoUsuario,GrupoId) 
					   VALUES ('".$Correo."',
					   			".$Grupo.")";
				
			if($resultado=mysqli_query($conexion,$consulta))
				{
					$retorno = array(
					"TipoMensaje" => 1,
					"Mensaje" =>"Estudiante gregado con éxito");
					echo json_encode($retorno);
				}
				else
				{
					$retorno = array(
						"TipoMensaje" => 2,
						"Mensaje" => "Error agregar al estudiante. ".mysqli_error($conexion));
					echo json_encode($retorno);
				}
		}
		catch(Exception $e){
			$retorno = array(
				"TipoMensaje" => 2,
				"Mensaje" => "Error agregar al estudiante. ".$e);
			echo json_encode($retorno);
		}

	}
	//cerrar la conexion
	mysqli_close($conexion);
?>