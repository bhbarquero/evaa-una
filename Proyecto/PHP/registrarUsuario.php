<?php

//REGISTRAR la dirección

if(isset($_POST['correo']))
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
		$correo=$_POST['correo'];
		$pass=$_POST['pass'];
		$tipo=$_POST['tipo'];
		
		$consulta="insert into tb_usuario
			(
				CorreoUsuario,
				Contrasena,
				TipoUsuarioId
			)
			values
			(
				'$correo',
				'$pass',
				'$tipo'	
			);
		";
		
		if($resultado=mysqli_query($conexion,$consulta))
		{
			echo "Éxito al guardar el usuario.";
		}
		else
		{
			echo "Error al guardar el usuario: ".mysqli_connect_error();
		}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);
}
else
{echo "Ocurrió un error. Lo siento, intentalo denuevo.";}
?>