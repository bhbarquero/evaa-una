<?php

//REGISTRAR la dirección

if(isset($_POST['asignacionid']))
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
		$AsignacionId=$_POST['asignacionid'];		
		
		$consulta="SELECT tb_asignaciones.AsignacionId, tb_asignaciones.DescripcionA ,
				tb_asignaciones.FechaInicio,tb_asignaciones.FechaFin,  tb_entregaasiganacion.Archivo 
				  from tb_asignaciones, tb_entregaasiganacion
				  where tb_entregaasiganacion.AsignacionId='".$AsignacionId."'
				  AND tb_asignaciones.AsignacionId = tb_entregaasiganacion.AsignacionId";
		
	     
		$respuesta;	
	if($resultado=mysqli_query($conexion,$consulta))
		{
			
			while ($resAsig = mysqli_fetch_row($resultado)) {
				if($resAsig[4]==NULL)
				$respuesta= $resAsig[0].','.$resAsig[1].','.$resAsig[2].','.$resAsig[3].','."N";
				else
				$respuesta= $resAsig[0].','.$resAsig[1].','.$resAsig[2].','.$resAsig[3].','.$resAsig[4];
			}
			echo $respuesta;
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