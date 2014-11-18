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
		$DescripcionA=$_POST['descripciona'];		
		//$Archivo=$_POST['archivo'];
		$GrupoId=$_POST['grupoid'];
		$FechaInicio=$_POST['fechainicio'];
		$FechaFinal=$_POST['fechafin'];
		$Dir=$_POST['dir'];	
		if($Dir!=""){
		$consulta="insert into tb_asignaciones
			(
				DescripcionA,
				GrupoId,
				FechaInicio,
				FechaFin,
				Archivo				
			)
			values
			(
				'$DescripcionA',
				'$GrupoId',
				'$FechaInicio',
				'$FechaFinal',
				'$Dir'
			);
		";
		}
		else
		{
		$consulta="insert into tb_asignaciones
			(
				DescripcionA,
				GrupoId,
				FechaInicio,
				FechaFin,				
			)
			values
			(
				'$DescripcionA',
				'$GrupoId',
				'$FechaInicio',
				'$FechaFinal'
			);
		";
		}
		
		
		
	if($resultado=mysqli_query($conexion,$consulta))
	{
			
				$retorno = array(
						"TipoMensaje" => 1,
						"Mensaje" => "Asignacion guardada con éxito");
					echo json_encode($retorno);
	}
	else
	{
			$retorno = array(
					"TipoMensaje" => 2,
					"Mensaje" => "Error al guardar la asignacion. ".mysqli_error($conexion));
				echo json_encode($retorno);
	}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);

?>