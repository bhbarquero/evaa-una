		<?php 
        $link = mysql_connect("localhost", "root"); 
        mysql_select_db("evaa_bd", $link); 
		session_start();

        //Listar Cursos de cada Profesor
		$consulta = "SELECT Descripcion, (tb_grupo.Anno) as Anno, (tb_grupo.GrupoId) as GrupoId
							 FROM tb_curso, tb_grupo, tb_profesor, tb_persona
                                WHERE tb_curso.CursoId = tb_grupo.CursoId 
                                AND tb_grupo.Pofesor = tb_profesor.Cedula 
								AND tb_curso.Descripcion LIKE '%".$_POST['Nombre']."%'
								AND tb_persona.CorreoUsuario = '". $_SESSION["user"]."'
								AND tb_persona.Cedula = tb_profesor.Cedula";			
								
		if ($_POST['AnnoGrupo'] != "")
			$consulta .= " AND tb_grupo.Anno = ".$_POST['AnnoGrupo']."";
		
		if ($result = mysql_query($consulta, $link)) {	
		
			if (mysql_num_rows($result = mysql_query($consulta, $link))>0){ 
				$tabla ="
				<table id='divResultados' class='evaa-table evaa-table-bordered' border = '1'>
				<thead>
					<tr>						
						<th>Curso</th>
						<th>Año</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
        			<tr>";
					while($row = mysql_fetch_row($result))
					$tabla= $tabla."
					<td class='evaa-odd'>".$row[0]."</td>
					<td class='evaa-odd'>".$row[1]."</td>
					<td class='evaa-table-odd'><a href=".'../HTML/InformacionCurso.php?grupId='.$row[2]."><img class='Buscar' src='../Imagenes/buscar.png' title='Consultar'> </a>
						</td>   
						
					</tr>";
					
				$tabla= $tabla."</tbody>
								</table>";
					echo $tabla; 
					
			}else 
				echo "<br><h2 class='content-subhead'>No se ha encontrado ningún curso!</h2>";
		}else 
			echo "<br><h2 class='content-subhead'>Error al buscar los cursos</h2>";
		mysql_close($link);
        ?>