<?php

//REGISTRAR la dirección

if(isset($_POST['cursoid'])&&isset($_POST['anno'])&&isset($_POST['ciclo']))
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
		session_start();
		
		//$Profesor=$_SESSION["user"];		
		$CursoId=$_POST['cursoid'];
		$Anno=$_POST['anno'];
		$Ciclo=$_POST['ciclo'];
		
		$consulta2="SELECT Cedula FROM tb_persona WHERE CorreoUsuario='".$_SESSION["user"]."'";
		if($resultado2=mysqli_query($conexion,$consulta2))
		{
			while ($resPro = mysqli_fetch_assoc($resultado2)) {
				$Profesor=$resPro['Cedula'];
			}
			$consulta="insert into tb_grupo
			(
				Pofesor,
				CursoId,
				Anno,
				Ciclo				
			)
			values
			(
				'$Profesor',
				'$CursoId',
				'$Anno',
				'$Ciclo'
			);
		";
		
		
	if($resultado=mysqli_query($conexion,$consulta))
		{
			echo "Guardado con Exito";
		}
		else
		{
			echo "Error al Registrar el Grupo ".mysqli_connect_error();
		}
		
			
		}
		else
		{echo "Error Al consultar El profesor";}
		
		
	}
	//cerrar la conexion
	mysqli_close($conexion);
}
else
{echo "Faltan Datos Requeridos";}
?>