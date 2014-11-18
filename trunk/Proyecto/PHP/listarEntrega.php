	<?php 
        $link = mysql_connect("localhost", "root"); 
        mysql_select_db("evaa_bd", $link); 
		$Asignacion=$_POST['asignacionId'];
		
        //Listar Cursos de cada Profesor
		$consulta = "SELECT tb_entregaasiganacion.CorreoUsuario, Archivo,Nota, tb_persona.cedula 
					FROM tb_entregaasiganacion 
					join tb_persona on tb_persona.correoUsuario=tb_entregaasiganacion.CorreoUsuario
					WHERE AsignacionId=".$Asignacion;			
								
		
		if ($result = mysql_query($consulta, $link)) {	
		
			if (mysql_num_rows($result = mysql_query($consulta, $link))>0){ 
				$tabla ="
				<table class='evaa-table evaa-table-bordered' border = '1'>
				<thead>
					<tr>						
						<th>Estudiante</th>
						<th>Archivo</th>
						<th>Nota</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
        			<tr>";
					while($row = mysql_fetch_row($result))
					
					$tabla= $tabla."
					<td class='evaa-odd'>".$row[0]."</td>
					<td class='evaa-odd'> <a target='_blank' href='".$row[1]."'>Descargar</a></td>
					<td class='evaa-odd'>".$row[2]."</td>
					<td class='evaa-table-odd'><input value='Seleccionar' onClick='funSeleccionar(".$row[3].")' type='button' id='btnSeleccionar'>
						</td>   
						
					</tr>";
					
				$tabla= $tabla."</tbody>
								</table>";
					echo $tabla; 
					
			}else 
				echo "<br><br><h2 class='content-subhead'>No se ha encontrado ningún curso!</h2>";
		}else 
			echo "<br><br><h2 class='content-subhead'>Error al buscar los cursos</h2>";
		mysql_close($link);
        ?>