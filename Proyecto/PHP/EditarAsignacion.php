<?php

//REGISTRAR la dirección

if(isset($_POST['descripciona']))
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
		$DescripcionA=$_POST['descripciona'];		
		//$Archivo=$_POST['archivo'];
		//$GrupoId=$_POST['grupoid'];
		$FechaInicio=$_POST['fechainicio'];
		$FechaFinal=$_POST['fechafin'];
		//Archivo='".$Archivo."',
			$consulta="UPDATE tb_asignaciones SET 
			DescripcionA='".$DescripcionA."', 
			FechaInicio='".$FechaInicio."',
			FechaFin='".$FechaFinal."'
			WHERE AsignacionId='".$AsignacionId."'";
				
			if($resultado=mysqli_query($conexion,$consulta))
			{
			
				echo "Se Actualizo con éxito";
				
			}
			else
			{
				echo "Error al Actualizar la Asinación: ".mysqli_connect_error();
			}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);
}
else
{echo "Faltan Datos Requeridos";}
?>