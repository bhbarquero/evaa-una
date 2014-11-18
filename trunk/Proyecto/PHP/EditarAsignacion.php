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
		$AsignacionId=$_POST['asignacionid'];
		$DescripcionA=$_POST['descripciona'];
		$Dir=$_POST['dir'];		
		//$Archivo=$_POST['archivo'];
		//$GrupoId=$_POST['grupoid'];
		$FechaInicio=$_POST['fechainicio'];
		$FechaFinal=$_POST['fechafin'];
		//Archivo='".$Archivo."',
		if($Dir!=""){
			$consulta="UPDATE tb_asignaciones SET 
			DescripcionA='".$DescripcionA."', 
			FechaInicio='".$FechaInicio."',
			FechaFin='".$FechaFinal."',
			Archivo='".$Dir."'
			WHERE AsignacionId='".$AsignacionId."'";
		}
		else
		{
			$consulta="UPDATE tb_asignaciones SET 
			DescripcionA='".$DescripcionA."', 
			FechaInicio='".$FechaInicio."',
			FechaFin='".$FechaFinal."'
			WHERE AsignacionId='".$AsignacionId."'";
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