<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<div id="divTitulo">
        <header>
            <label>EVAA</label>
            <h1>Mis Cursos</h1>
            <label>Listado de Cursos de Estudiante </label>
        </header>
        
        <div id="divConsultar">
        <br>
        <?php 
		$link = mysql_connect("localhost", "root"); 
		mysql_select_db("evaa_bd", $link); 
		
		/*Listar Cursos Estudiantes, filtrando por CORREO*/
		$result = mysql_query("SELECT Descripcion FROM tb_curso, tb_grupo, tb_matricula 
								WHERE tb_curso.CursoId = tb_grupo.CursoId 
								AND tb_grupo.GrupoId = tb_matricula.GrupoId 
								AND tb_matricula.usuarioCoreo = '123@gmail.com'", $link);;					
			if ($result != NULL){ 
				echo "<table border = '1'> \n"; 
				echo "<tr><td><b>Nombre Cursos</b></td></tr> \n"; 
				while ($row = mysql_fetch_row($result)) {   
					echo "<tr><td>$row[0]</td></tr> \n";    
				}
			   echo "</table> \n"; 
			}	else { 
			echo "¡ No se ha encontrado ningún registro !"; 
			}			
		?> 
        
        <footer>
        </footer>
    </div>
</body>
</html>