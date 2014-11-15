<?php

//REGISTRAR la dirección
	session_start();
	$conexion=mysqli_connect("localhost","root","","evaa_bd");
	//COMPROBAR SI HUBO UN ERROR EN LA CONEXION
	if(mysqli_connect_errno())
	{
		echo "Error al conectar con la BD. ".mysqli_connect_error();
	}
	else
	{
		$Correo=$_SESSION['user'];		
		
		$consulta="SELECT tb_persona.*,tb_estudiante.FechaIngreso  
				  from tb_persona 
				  inner join tb_estudiante on tb_persona.cedula=tb_estudiante.cedula 
				  where tb_persona.CorreoUsuario='".$Correo."'";
		
	     
			
	if($resultado=mysqli_query($conexion,$consulta))
		{
			while ($resEst = mysqli_fetch_assoc($resultado)) {
				echo '1'.','.$resEst['Cedula'].','.$resEst['Nombre'].','.$resEst['Apellido'].','.$resEst['FechaNacimiento']
				.','.$resEst['Direccion'].','.$resEst['TelefonoFijo'].','.$resEst['TelefonoMovil']
				.','.$resEst['FechaIngreso'];
			}
			
		}
		else
		{
			echo '1'."Error al Consultar: ".mysqli_connect_error();
		}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);

?>