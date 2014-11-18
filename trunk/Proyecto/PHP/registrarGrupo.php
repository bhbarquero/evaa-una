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
		$CursoId=$_POST['cursoid'];
		$Anno=$_POST['anno'];
		$Ciclo=$_POST['ciclo'];
		
		$consulta2="SELECT Cedula FROM tb_persona WHERE CorreoUsuario='".$_SESSION["user"]."'";
		if($resultado2=mysqli_query($conexion,$consulta2))
		{
			while ($resPro = mysqli_fetch_assoc($resultado2)) {
				$Profesor=$resPro['Cedula'];
			}
			$consulta="insert into tb_grupo
				(
					Pofesor,
					CursoId,
					Anno,
					Ciclo				
				)
				values
				(
					'$Profesor',
					'$CursoId',
					'$Anno',
					'$Ciclo'
				);
			";
		
		
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
		else
		{
			$retorno = array(
					"TipoMensaje" => 2,
					"Mensaje" => "Error al gconsultar el profesor. ".mysqli_error($conexion));
				echo json_encode($retorno);}
		
		
	}
	//cerrar la conexion
	mysqli_close($conexion);
	
?>