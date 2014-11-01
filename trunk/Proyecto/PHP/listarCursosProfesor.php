		<?php 
        $link = mysql_connect("localhost", "root"); 
        mysql_select_db("evaa_bd", $link); 

        //Listar Cursos de cada Profesor
		$consulta = "SELECT Descripcion, (tb_grupo.GrupoId) as GrupoId
							 FROM tb_curso, tb_grupo, tb_profesor 
                                WHERE tb_curso.CursoId = tb_grupo.CursoId 
                                AND tb_grupo.Pofesor = tb_profesor.Cedula 
								AND tb_curso.Descripcion LIKE '%".$_POST['Nombre']."%'
                                AND tb_profesor.Cedula  = '115110793'";			
								
		if ($_POST['AnnoGrupo'] != "")
			$consulta .= " AND tb_grupo.Anno = ".$_POST['AnnoGrupo']."";
		
		if ($result = mysql_query($consulta, $link)) {	
		
			if (mysql_num_rows($result = mysql_query($consulta, $link))>0){ 
				$tabla ="<table class='pure-table' border = '1'><br/><tr><td><b>Historial de Cursos</b></td></tr> \n";
					while($row = mysql_fetch_row($result))   
						$tabla= $tabla."<tr><td>".$row[0]."<a href=".'../HTML/InformacionCurso.php?grupId='.$row[1]."> Consultar </a> </td></tr><br/></table>\n";
					echo $tabla; 
			}else 
				echo "<br>No se ha encontrado ningún curso!";
		}else 
			echo "<br>No se ha encontrado ningún curso!";
		mysql_close($link);
        ?> 