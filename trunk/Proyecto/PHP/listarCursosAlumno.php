		<?php 
        $link = mysql_connect("localhost", "root"); 
        mysql_select_db("evaa_bd", $link); 
		session_start();
		
        //Listar Cursos Estudiantes, filtrando por CORREO
		$consulta = "SELECT Descripcion, (tb_grupo.Anno) as Anno, 
					Concat(tb_grupo.Ciclo,' - ',tb_grupo.Anno)  as Periodo,
					(tb_grupo.grupoId) as GrupoId
								FROM tb_curso, tb_grupo, tb_matricula 
                                WHERE tb_curso.CursoId = tb_grupo.CursoId 
                                AND tb_grupo.GrupoId = tb_matricula.GrupoId 
								AND tb_curso.Descripcion LIKE '%".$_POST['Nombre']."%'
                                AND tb_matricula.CorreoUsuario  = '". $_SESSION["user"]."'";			
								
		if ($_POST['AnnoGrupo'] != "")
			$consulta .= " AND tb_grupo.Anno = ".$_POST['AnnoGrupo']."";

		if ($result = mysql_query($consulta, $link)) {	
			if (mysql_num_rows($result = mysql_query($consulta, $link))>0){ 
				$tabla ="
				<table id='divResultados' class='evaa-table evaa-table-bordered' border = '1'>
				<thead>
					<tr>						
						<th>Curso</th>
						<th>Periodo</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
        			<tr>";
					while($row = mysql_fetch_row($result))
					$tabla= $tabla."
					<td class='evaa-odd'>".$row[0]."</td>
					<td class='evaa-odd'>".$row[1]."</td>
					<td class='evaa-table-odd'><a href=".'../HTML/InfoCursoAlumno.php?grupId='.$row[3]."><img class='Buscar' src='../Imagenes/buscar.png' title='Consultar'> </a>
						</td>   
						
					</tr>";
					
				$tabla= $tabla."</tbody>
								</table>";
					echo $tabla; 
			}else 
				echo "<br><br><h2 class='content-subhead'>No se ha encontrado ningún curso!</h2>";
		}else 
			echo "<br><br><h2 class='content-subhead'>No se ha encontrado ningún curso!</h2>";
		mysql_close($link);
        ?> 