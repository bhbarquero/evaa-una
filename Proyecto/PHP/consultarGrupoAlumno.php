<?php

	session_start();
	$conexion=mysqli_connect("localhost","root","","evaa_bd");
	$Grupo=$_POST['grupo'];
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
							
			$consulta="SELECT Concat(Ciclo,' - ',Anno) as Periodo,
						   (tb_curso.Descripcion) as Curso, 
							Concat(tb_persona.Nombre,' ',tb_persona.apellido) as NombreCompleto
							FROM tb_grupo 
							Inner join tb_curso on tb_curso.CursoId = tb_grupo.CursoId
							Inner join tb_persona on tb_persona.cedula= tb_grupo.Pofesor
							WHERE GrupoId=".$Grupo;
				
			if($resultado=mysqli_query($conexion,$consulta))
				{
					while ($resPro = mysqli_fetch_assoc($resultado)) {
						$retorno = array(
								"TipoMensaje" => 1,
								"Periodo" =>$resPro['Periodo'],
								"Curso" => $resPro['Curso'],
								"Profesor" => $resPro['NombreCompleto']);
								
							echo json_encode($retorno);
					}
					
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