<?php

//REGISTRAR la dirección

if(isset($_POST['cedula']))
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
		$Especialidad=$_POST['especialidad'];
		
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
			
	if($resultado=mysqli_query($conexion,$consulta))
		{
			$consulta2="insert into tb_profesor
				(
					Cedula,
					Especialidad		
				)
				values
				(
					'$Cedula',
					'$Especialidad'
							
				);
			";	
			if($resultado2=mysqli_query($conexion,$consulta2))
			{
			
				echo "Guardado con exito";
			}
			else
			{
				echo "Error al Ingresar el Nuevo Profesor: ".mysqli_connect_error();
			}
		}
		else
		{
			echo "Error al Ingresar el Profesor: ".mysqli_connect_error();
		}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);
}
else
{echo "Faltan Datos Requeridos";}
?>