<?php
	$conexion=mysqli_connect("localhost","root","","evaa_bd");
	//COMPROBAR SI HUBO UN ERROR EN LA CONEXION
	if(mysqli_connect_errno())
	{
		$retorno = array(
			"TipoMensaje" => 2,
			"Mensaje" => "Error al conectar con la BD. ".mysqli_connect_error());
		echo json_encode($retorno);
	}
	else
	{	
		
		$consulta="SELECT CursoId, Descripcion FROM tb_curso";
		
	     
			
	if($resultado=mysqli_query($conexion,$consulta))
		{
			
			while ($resPro = mysqli_fetch_assoc($resultado)) {
				$combo=$combo."		
				<option value=".$resPro['CursoId'].">".$resPro['Descripcion']." </option>";			  
			}
			
			if(mysqli_num_rows($resultado)>0)
				{
					echo $combo;
				}
			else
				{
					$retorno = array(
						"TipoMensaje" => 2,
						"Mensaje" => "No hay cursos registrados. ".mysqli_error($conexion));
					echo json_encode($retorno);
				}
			
		}
		else
		{
			$retorno = array(
				"TipoMensaje" => 2,
				"Mensaje" => "Error al cargar los cursos. ".mysqli_error($conexion));
			echo json_encode($retorno);
		}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);
?>