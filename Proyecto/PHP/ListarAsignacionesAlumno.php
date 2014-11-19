<?php

	$conexion=mysqli_connect("localhost","root","","evaa_bd");
	$cur;
	session_start();
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
		$Grupo=$_POST['grupoId'];	
		
		$consulta="SELECT tb_asignaciones.AsignacionId,(tb_entregaasiganacion.Nota) as nota , DescripcionA, 
		tb_asignaciones.Archivo, FechaFin, FechaInicio,(tb_Curso.Descripcion) as curso,
		Concat(tb_grupo.Ciclo,' - ',tb_grupo.Anno) as Periodo
				   FROM tb_asignaciones
				   join tb_grupo on tb_grupo.grupoId = tb_asignaciones.grupoId 
				   join tb_curso on tb_grupo.CursoId = tb_curso.CursoId
                   join tb_entregaasiganacion on tb_entregaasiganacion.AsignacionId = tb_asignaciones.AsignacionId and tb_entregaasiganacion.CorreoUsuario='". $_SESSION["user"]."'
					WHERE tb_asignaciones.GrupoId=".$Grupo;
		
	     
			
	if($resultado=mysqli_query($conexion,$consulta))
		{
			
			$tabla="<table class='evaa-table evaa-table-bordered' border='1'>
			
				<thead>
					<tr>						
						<th>Descripción</th>
						<th>Fech. Entrega</th>
						<th>Nota</th>
						<th></th>
					</tr>
				</thead>
				<tbody>";
			while ($resPro = mysqli_fetch_assoc($resultado)) {
				$cur=$resPro['curso'];
				$per =$resPro['Periodo'];
				$tabla=$tabla."
						<tr>
						  <td class='evaa-odd'>".$resPro['DescripcionA']."</td>
						  <td class='evaa-odd'>".$resPro['FechaFin']."</td>
						  <td class='evaa-odd'>".$resPro['nota']."</td>
						  <td class='evaa-table-odd'><a href=".'../HTML/InformacionAsignacionAlumno.php?P='.$resPro['AsignacionId']."><img class='Buscar' src='../Imagenes/buscar.png' title='Consultar'> </a></td>
					     </tr>";				  
			}
			$tabla=$tabla."</tbody>
							</table>";
			if(mysqli_num_rows($resultado)>0)
			{
				
				$retorno = array(
					"TipoMensaje" => 1,
					"Mensaje" => $tabla,
					"Curso" => $cur,
					"Periodo" => $per
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