<?php

//REGISTRAR la dirección

if(isset($_POST['asignacionid']))
{
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
		
		$consulta="SELECT tb_asignaciones.*  
				  from tb_asignaciones
				  where tb_asignaciones.AsignacionId='".$AsignacionId."'";
		
	     
			
	if($resultado=mysqli_query($conexion,$consulta))
		{
			while ($resAsig = mysqli_fetch_assoc($resultado)) {
				
				$retorno = array(
					"TipoMensaje" => 1,
					"AsignacionId" => $resAsig['AsignacionId'],
					"Descripcion" => $resAsig['DescripcionA'],
					"Archivo" => $resAsig['Archivo'],
					"GrupoId" => $resAsig['GrupoId'],
					"Inicio" => $resAsig['FechaInicio'],
					"Final" => $resAsig['FechaFin']);
				echo json_encode($retorno);
				
			}
			
		}
		else
		{
			$retorno = array(
					"TipoMensaje" => 2,
					"Mensaje" => "Error al Consultar: ".mysqli_connect_error());
				echo json_encode($retorno);
		}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);
}
else
{echo "Faltan Datos Requeridos";}
?>