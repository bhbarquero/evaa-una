<?php
	$conexion=mysqli_connect("localhost","root","","evaa_bd");
	//COMPROBAR SI HUBO UN ERROR EN LA CONEXION
	if(mysqli_connect_errno())
	{
		echo "Error al conectar con la BD. ".mysqli_connect_error();
	}
	else
	{	
		
		$consulta="SELECT CursoId, Descripcion FROM tb_curso";
		
	     
			
	if($resultado=mysqli_query($conexion,$consulta))
		{

			//$combo="<div class='evaa-control-group'>
			//	   <label for='curso'>Curso: </label>
				//   <select name='cmbCurso'>
			//";
			
			while ($resPro = mysqli_fetch_assoc($resultado)) {
				//$combo=$combo."
				$combo=$combo."		
				<option value=".$resPro['CursoId'].">".$resPro['Descripcion']." </option>";			  
			}
			//$combo=$combo.="
			//	</select>
        		//</div>
			//";
			if(mysqli_num_rows($resultado)>0)
				{
					echo $combo;}
			else
				{echo "No hay cursos para mostrar";}
			
		}
		else
		{
			echo "Error al Consultar: ".mysqli_connect_error();
		}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);
?>