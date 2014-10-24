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
		
		
		$consulta="Select * 
				   From tb_persona 
				   Where CorreoUsuario LIKE '".$Correo."'";
				   
	     
			
	if($resultado=mysqli_query($conexion,$consulta))
		{
			while ($resEmp = mysqli_fetch_assoc($resultado)) {
				session.satar();
				$_SESSION['CedulaPersona']=$resEmp['Cedula'];
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