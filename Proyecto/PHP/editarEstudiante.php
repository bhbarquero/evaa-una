<?php

//REGISTRAR la dirección
if(isset($_POST['cedula'])&&isset($_POST['nombre'])&&isset($_POST['apellido'])&&isset($_POST['fechanacimiento'])&&isset($_POST['direccion'])&&isset($_POST['telefonofijo'])&&isset($_POST['telefonomovil'])&&isset($_POST['fechaingreso']))
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
		$Cedula=$_POST['cedula'];		
		$Nombre=$_POST['nombre'];
		$Apellido=$_POST['apellido'];
		$FechaNacimiento=$_POST['fechanacimiento'];
		$Direccion=$_POST['direccion'];
		$TelefonoFijo=$_POST['telefonofijo'];
		$TelefonoMovil=$_POST['telefonomovil'];
		$FechaIngreso=$_POST['fechaingreso'];
		
			$consulta="UPDATE tb_persona SET 
			Nombre='".$Nombre."', 
			Apellido='".$Apellido."',
			FechaNacimiento='".$FechaNacimiento."',
			Direccion='".$Direccion."',
			TelefonoFijo=".$TelefonoFijo.",
 			TelefonoMovil =".$TelefonoMovil."
			WHERE Cedula='".$Cedula."'";
			
		if($resultado=mysqli_query($conexion,$consulta))
		{
			$consulta2="UPDATE tb_estudiante SET
				FechaIngreso='".$FechaIngreso."'
				Where Cedula='".$Cedula."'";	
			if($resultado2=mysqli_query($conexion,$consulta2))
			{
			
				echo "Se actualizo con éxito";
				
			}
			else
			{
				echo "Error al Actualizar el Estudiante: ".mysqli_connect_error();
			}
		}
		else
		{
			echo "Error al Actualizar la Persona: ".mysqli_connect_error();
		}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);
}
else
{echo "Faltan Datos Requeridos";}
?>