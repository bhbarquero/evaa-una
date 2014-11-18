		<?php 
        $link = mysql_connect("localhost", "root"); 
        mysql_select_db("evaa_bd", $link); 
		session_start();
		$promedio;
		
        //Listar Cursos de cada Profesor
		$consultaTipos = "SELECT (tb_tipoasignacion.Id_tipoasignacion) AS Id, (tb_tipoasignacion.Descripcion) AS De,
							(tb_porcentajeasignaciones.Porcentaje) AS Po FROM tb_tipoasignacion, tb_porcentajeasignaciones
							WHERE tb_tipoasignacion.Id_tipoasignacion = tb_porcentajeasignaciones.Id_tipoasignacion";	
		
		$consultaNotas = "SELECT Nota FROM tb_usuario, tb_entregaasiganacion, tb_matricula
							WHERE tb_usuario.CorreoUsuario = '".$_SESSION['user']."'
							AND tb_entregaasiganacion.CorreoUsuario = tb_usuario.CorreoUsuario 
                            AND tb_usuario.CorreoUsuario = tb_matricula.CorreoUsuario 
							AND tb_matricula.GrupoId = '". $_POST["Grupo"]."'";
		
		if ($resultadoTipo = mysql_query($consultaTipos, $link)) {	
			if (mysql_num_rows($resultadoTipo = mysql_query($consultaTipos, $link))>0){
				$tabla ="
				<table id='divResultados' class='evaa-table evaa-table-bordered' border = '1'>
				<thead>
					<tr>						
						<th>Descripcion</th>
						<th>Porcentaje</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
        		<tr>";
				while($Tipo = mysql_fetch_row($resultadoTipo)){
					$cant=0;
					if ($resuladoNota = mysql_query($consultaNotas, $link)) {	
						if (mysql_num_rows($resuladoNota = mysql_query($consultaNotas, $link))>0){
							while($Nota = mysql_fetch_row($resultadoNota)){
								if ($Nota[0]==$Tipo[0])
									$cant+=1;	
							}
							$poXuni = $Tipo[2]/$cant;
							$prom;
							while($Nota = mysql_fetch_row($resultadoNota)){
								if ($Nota[0]==$Tipo[0])
									$prom += ($poXuni/100)*$Nota;		
							}
							$tabla= $tabla."
							<td class='evaa-odd'>".$Tipo[0]."</td>
							<td class='evaa-odd'>".$prom[1]."</td>
							</td>   
							</tr>";
	
						}	//if
					}	//if
				}	//while			
				$tabla= $tabla."</tbody>
				</table>";
				echo $tabla; 
			}else 
				echo "<br><h2 class='content-subhead'>No ahí notas registradas!</h2>";
		}else 
			echo "<br><h2 class='content-subhead'>Error al buscar las Notas</h2>";
		mysql_close($link);
        ?>