<?php

//REGISTRAR la dirección

if(isset($_POST['correoUsuario']))
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
		$Correo=$_POST['correoUsuario'];		
		
		$consulta="SELECT tb_persona.*,tb_profesor.Especialidad  
				  from tb_persona 
				  inner join tb_profesor on tb_persona.cedula=tb_profesor.cedula 
				  where tb_persona.CorreoUsuario='".$Correo."'";
		
	     
			
	if($resultado=mysqli_query($conexion,$consulta))
		{
			while ($resPro = mysqli_fetch_assoc($resultado)) {
				echo $resPro['Cedula'].','.$resPro['Nombre'].','.$resPro['Apellido'].','.$resPro['FechaNacimiento']
				.','.$resPro['Direccion'].','.$resPro['TelefonoFijo'].','.$resPro['TelefonoMovil']
				.','.$resPro['Especialidad'];
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