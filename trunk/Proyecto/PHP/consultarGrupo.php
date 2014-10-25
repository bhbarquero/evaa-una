<?php

//REGISTRAR la dirección

if(isset($_POST['grupoId']))
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
		$Grupo=$_POST['grupoId'];		
		
		$consulta="SELECT Anno, Ciclo, (tb_curso.Descripcion) as curso, 
						Concat(tb_persona.Nombre,tb_persona.apellido) as nombreCompleto
				   FROM tb_grupo 
				   Inner join tb_curso on tb_curso.CursoId = tb_grupo.CursoId
				   Inner join tb_persona on tb_persona.cedula= tb_grupo.Pofesor
				   WHERE GrupoId=".$Grupo;
		
	     
			
	if($resultado=mysqli_query($conexion,$consulta))
		{
			while ($resPro = mysqli_fetch_assoc($resultado)) {
				echo $resPro['Anno'].','.$resPro['Ciclo'].','.$resPro['curso'].','
				.$resPro['nombreCompleto'];
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