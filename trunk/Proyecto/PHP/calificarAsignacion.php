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
		$Cedula=$_POST['cedula'];		
		$Nota=$_POST['nota'];
		$AsignacionId=$_POST['asignacionid'];
		
		
		
		$consulta="UPDATE tb_entregaasiganacion 
		SET Nota=".$Nota."
		WHERE AsignacionId=".$AsignacionId." and CorreoUsuario=(select correoUsuario from tb_persona where cedula='".$Cedula."')
					
		";
			
	if($resultado=mysqli_query($conexion,$consulta))
		{
			$retorno = array(
					"TipoMensaje" => 1,
					"Mensaje" => "Se calificó con éxito");
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
	//cerrar la conexion
	mysqli_close($conexion);

?>