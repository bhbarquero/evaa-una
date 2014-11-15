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
		
		$consulta="insert into tb_persona
			(
				Cedula,
				Nombre,
				Apellido,
				FechaNacimiento,
				Direccion,
				TelefonoFijo,
				TelefonoMovil		
			)
			values
			(
				'$Cedula',
				'$Nombre',
				'$Apellido',
				'$FechaNacimiento',
				'$Direccion',
				'$TelefonoFijo',
				'$TelefonoMovil'
							
			);
		";
		
		$consulta1="insert into tb_estudiante
			(
				Cedula,
				FechaIngreso
			)
			values
			(
				'$Cedula',
				'$FechaIngreso'			
			);
			";
		
	if($resultado=mysqli_query($conexion,$consulta)&&$resultado1=mysqli_query($conexion,$consulta1))
		{
			echo "Guardado con exito";
		}
		else
		{
			echo "Error al Guardar los Datos de Estudiante".mysqli_connect_error();
		}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);
}
else
{echo "Faltan Datos Requeridos";}
?>