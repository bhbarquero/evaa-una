<?php

	$conexion=mysqli_connect("localhost","root","","evaa_bd");
	$cur;
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
		$Grupo=$_POST['grupoId'];		
		
		$consulta="SELECT (tb_Asignaciones.AsignacionId) as AsignacionId, DescripcionA, (tb_Asignaciones.Archivo) as Archivo, FechaFin, FechaInicio,(tb_Curso.Descripcion) as curso, (tb_entregaasiganacion.Nota) as Nota
					FROM tb_asignaciones
					 join tb_grupo on tb_grupo.grupoId = tb_asignaciones.grupoId 
					 join tb_curso on tb_grupo.CursoId = tb_curso.CursoId
					join tb_entregaasiganacion on tb_entregaasiganacion.AsignacionId = tb_Asignaciones.AsignacionId and
tb_entregaasiganacion.CorreoUsuario='".$_SESSION["user"]."'

					WHERE tb_asignaciones.GrupoId=".$Grupo;
		
	     
			
	if($resultado=mysqli_query($conexion,$consulta))
		{
			
			$tabla="<table id='divResultados' class='evaa-table evaa-table-bordered' border='1'>
			
				<thead>
					<tr>						
						<th>Descripción</th>
						<th>Entrega</th>
						<th>Nota</th>
						<th></th>
					</tr>
				</thead>
				<tbody>";
			while ($resPro = mysqli_fetch_assoc($resultado)) {
				$cur=$resPro['curso'];
				$tabla=$tabla."
						<tr>
						  <td class='evaa-odd'>".$resPro['DescripcionA']."</td>
						  <td class='evaa-odd'>".$resPro['FechaFin']."</td>
						   <td class='evaa-odd'>".$resPro['Nota']."</td>
						  <td class='evaa-table-odd'><a href=".'../HTML/InformacionAsignacion.php?P='.$resPro['AsignacionId']."&G=0"."><img class='Buscar' src='../Imagenes/buscar.png' title='Consultar'> </a></td>
					     </tr>";				  
			}
			$tabla=$tabla."</tbody>
							</table>";
			if(mysqli_num_rows($resultado)>0)
			{
				
				$retorno = array(
					"TipoMensaje" => 1,
					"Mensaje" => $tabla,
					"Curso" => $cur
				);
				echo json_encode($retorno);
			}
			else
			{
				$retorno = array(
					"TipoMensaje" => 1,
					"Mensaje" => "No hay asiganciones registradas. ".mysqli_error($conexion),
					"Curso" => $cur
				);
					
				echo json_encode($retorno);
			}
			
		}
		else
		{
			$retorno = array(
					"TipoMensaje" => 2,
					"Mensaje" => "Error al cargar las asignaciones. ".mysqli_error($conexion));
				echo json_encode($retorno);
		}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);

?>