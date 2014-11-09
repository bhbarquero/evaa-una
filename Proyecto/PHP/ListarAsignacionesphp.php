<?php

//REGISTRAR la dirección

if(isset($_POST['grupoId']))
// && isset($_POST['pass']) && isset($_POST['activo']) && isset($_POST['vence']) && isset($_POST['tiempo']))
{
	$conexion=mysqli_connect("localhost","root","","evaa_bd");
	//COMPROBAR SI HUBO UN ERROR EN LA CONEXION
	if(mysqli_connect_errno())
	{
		echo "Error al conectar con la BD. ".mysqli_connect_error();
	}
	else
	{
		$Grupo=$_POST['grupoId'];		
		
		$consulta="SELECT AsignacionId, DescripcionA, Archivo, FechaFin, FechaInicio,(tb_Curso.Descripcion) as curso
					FROM tb_asignaciones
					 join tb_grupo on tb_grupo.grupoId = tb_asignaciones.grupoId 
					 join tb_curso on tb_grupo.CursoId = tb_curso.CursoId
					WHERE tb_asignaciones.GrupoId=".$Grupo;
		
	     
			
	if($resultado=mysqli_query($conexion,$consulta))
		{
			
			$tabla="<table class='evaa-table evaa-table-bordered' border='1'>
			
				<thead>
					<tr>						
						<th>#</th>
						<th>Descripción</th>
						<th>Curso</th>
						<th>Fecha Inicio</th>
						<th>Fecha Fin</th>
					</tr>
				</thead>
				<tbody>";
			while ($resPro = mysqli_fetch_assoc($resultado)) {
				$cur=$resPro['curso'];
				$tabla=$tabla."
						<tr>
						  <td class='evaa-table-odd'><a href=".'../HTML/InformacionAsignacion.php?AsignacionId='.$resPro['AsignacionId']."><img class='Buscar' src='../Imagenes/buscar.png' title='Consultar'> </a>
						  <td>".$resPro['DescripcionA']."</td>
						  <td>".$resPro['curso']."</td>
						  <td>".$resPro['FechaInicio']."</td>
						  <td>".$resPro['FechaFin']."</td>
					     </tr>";				  
			}
			$tabla=$tabla."</tbody>
							</table>";
			if(mysqli_num_rows($resultado)>0)
				{
					echo $tabla.",".$cur;}
			else
				{echo "No hay Asignaciones para este curso";}
			
		}
		else
		{
			echo "Error al Consultar: ".mysqli_connect_error();
		}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);
}
else
{echo "Faltan Datos Requeridos";}
?>