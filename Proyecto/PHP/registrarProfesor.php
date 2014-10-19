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
		$Direccion=$_POST['diricion'];
		$TelefonoFijo=$_POST['telefonofijo'];
		$TelefonoMovil=$_POST['telefonomovil'];
		
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
			echo "$short";
		}
		else
		{
			echo "Error al acortar la dirección: ".mysqli_connect_error();
		}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);
}
else
{echo "Faltan Datos Requeridos";}
?>