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
		session_start();
		
		//$Profesor=$_SESSION["user"];		
		$AsignacionId=$_POST['asignacionid'];
		$Archivo=$_POST['archivo'];
		//$_SESSION["user"]
		$consulta="INSERT INTO tb_entregaasiganacion(CorreoUsuario, AsignacionId, Archivo) 
		VALUES (
				'".$_SESSION["user"]."',
				".$AsignacionId.",
				'".$Archivo."'
				
					)";
		
		
		if($resultado=mysqli_query($conexion,$consulta))
		{
			$retorno = array(
					"TipoMensaje" => 1,
					"Mensaje" => "Enteregada con éxito");
				echo json_encode($retorno);
			
		}
		else
		{
			$retorno = array(
					"TipoMensaje" => 2,
					"Mensaje" => "Error al guardar la entrega. ".mysqli_error($conexion));
				echo json_encode($retorno);}
		
		
	}
	//cerrar la conexion
	mysqli_close($conexion);
	
?>