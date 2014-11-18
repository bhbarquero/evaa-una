<?php

	session_start();
	$conexion=mysqli_connect("localhost","root","","evaa_bd");
	//$Grupo=$_POST['grupoid'];
	//$Correo=$_POST['correo'];
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
					   (CorreoUsuario, GrupoId) 
					   VALUES ('bbarquero@gmail.com',
					   			10)";
				
			if($resultado=mysqli_query($conexion,$consulta))
				{
					$retorno = array(
					"TipoMensaje" => 1,
					"Mensaje" =>"Agregado con éxito");
					echo json_encode($retorno);
				}
				else
				{
					$retorno = array(
						"TipoMensaje" => 2,
						"Mensaje" => "Error al cargar los datos. ".mysqli_error($conexion));
					echo json_encode($retorno);
				}
		}
		catch(Exception $e){
			$retorno = array(
				"TipoMensaje" => 2,
				"Mensaje" => "Error al cargar los datos. ".$e);
			echo json_encode($retorno);
		}

	}
	//cerrar la conexion
	mysqli_close($conexion);
?>