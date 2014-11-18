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
		$CursoId=$_POST['cursoid'];
		$Anno=$_POST['anno'];
		$Ciclo=$_POST['ciclo'];
		$GrupoId=$_POST['grupoid'];
		
			$consulta="UPDATE tb_grupo SET 
			CursoId=".$CursoId.",
			Anno=".$Anno.",
			Ciclo='".$Ciclo."'
			WHERE GrupoId=".$GrupoId;
			
			
			
			if($resultado=mysqli_query($conexion,$consulta))
			{
			
				$retorno = array(
						"TipoMensaje" => 1,
						"Mensaje" => "Grupo gurdado con éxito");
					echo json_encode($retorno);
				
			}
			else
			{
				$retorno = array(
					"TipoMensaje" => 2,
					"Mensaje" => "Error al guardar el grupo. ".mysqli_error($conexion));
				echo json_encode($retorno);
			}
		}
		
	//cerrar la conexion
	mysqli_close($conexion);

?>