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
		
		$consulta="SELECT tb_asignaciones.*  
				  from tb_asignaciones
				  where tb_asignaciones.AsignacionId='".$AsignacionId."'";
		
	     
			
	if($resultado=mysqli_query($conexion,$consulta))
		{
			while ($resAsig = mysqli_fetch_assoc($resultado)) {
				echo $resAsig['AsignacionId'].','.$resAsig['DescripcionA'].','.$resAsig['Archivo'].','.$resAsig['GrupoId']
				.','.$resAsig['FechaInicio'].','.$resAsig['FechaFin'];
			}
			
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