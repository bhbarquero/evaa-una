		<?php 
        $link = mysql_connect("localhost", "root"); 
        mysql_select_db("evaa_bd", $link); 
		session_start();
		
        //Listar Cursos Estudiantes, filtrando por CORREO
		$consulta = "SELECT Descripcion FROM tb_curso, tb_grupo, tb_matricula 
                                WHERE tb_curso.CursoId = tb_grupo.CursoId 
                                AND tb_grupo.GrupoId = tb_matricula.GrupoId 
								AND tb_curso.Descripcion LIKE '%".$_POST['Nombre']."%'
                                AND tb_matricula.CorreoUsuario  = '". $_SESSION["user"]."'";			
								
		if ($_POST['AnnoGrupo'] != "")
			$consulta .= " AND tb_grupo.Anno = ".$_POST['AnnoGrupo']."";
echo $consulta;
		if ($result = mysql_query($consulta, $link)) {	
			if (mysql_num_rows($result = mysql_query($consulta, $link))>0){ 
				$tabla ="<table border = '1'><br/><tr><td><b>Historial de Cursos</b></td></tr> \n";
					while($row = mysql_fetch_row($result))   
						$tabla= $tabla."<tr><td>".$row[0]."</td></tr><br/></table>\n";
					echo $tabla; 
			}else 
				echo "<br>No se ha encontrado ningún curso!";
		}else 
			echo "<br>No se ha encontrado ningún curso!";
		mysql_close($link);
        ?> 