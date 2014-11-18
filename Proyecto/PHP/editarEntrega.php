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
		
		$Asignacion=$_POST["asignacionid"];		
		$Archivo=$_POST['archivo'];
		
		$consulta="UPDATE tb_entregaasiganacion SET Archivo='".$Archivo."' WHERE CorreoUsuario='".$_SESSION["user"]."' and AsignacionId=".$Asignacion;
		
		
		if($resultado=mysqli_query($conexion,$consulta))
		{
			$retorno = array(
					"TipoMensaje" => 1,
					"Mensaje" => "Enteregada actualizada éxito");
				echo json_encode($retorno);
			
		}
		else
		{
			$retorno = array(
					"TipoMensaje" => 2,
					"Mensaje" => "Error al actualizar la entrega. ".mysqli_error($conexion));
				echo json_encode($retorno);}
		
		
	}
	//cerrar la conexion
	mysqli_close($conexion);
	
?>