<?php

//REGISTRAR la dirección

if(isset($_POST['profesor'])&&isset($_POST['cursoid'])&&isset($_POST['anno'])&&isset($_POST['ciclo']))
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
		$Profesor=$_POST['profesor'];		
		$CursoId=$_POST['cursoid'];
		$Anno=$_POST['anno'];
		$Ciclo=$_POST['ciclo'];
		
			$consulta="UPDATE tb_persona SET 
			Profesor='".$Nombre."', 
			CursoId='".$Apellido."',
			Anno='".$FechaNacimiento."',
			Ciclo='".$Direccion."'";
			
			if($resultado=mysqli_query($conexion,$consulta))
			{
			
				echo "Se actualizo con éxito";
				
			}
			else
			{
				echo "Error al Actualizar el Grupo: ".mysqli_connect_error();
			}
		}
		
	//cerrar la conexion
	mysqli_close($conexion);
}
else
{echo "Faltan Datos Requeridos";}
?>