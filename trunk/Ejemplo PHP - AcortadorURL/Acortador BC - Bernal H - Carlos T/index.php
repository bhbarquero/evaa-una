<!doctype html>
<html lang="en">
<head>
<title>Acortador URL BC</title>
<script src="Scripts/redirect.js" type="text/javascript"></script>
<link rel="stylesheet" href="Styles/General.css" type="text/css">
<?php
	
	$a=$_GET['a'];

	$con = mysql_connect("localhost","root","");
	if (!$con)
  	{
  		die('No puedo conectarme: ' . mysql_error());
  	}
		// Base de datos
		mysql_select_db("proyectoweb", $con);
		
		if ($resultado=mysql_query("select * from web_url WHERE short_url = 'localhost/?a=".$a."'",$con))
		{
			while($fila = mysql_fetch_assoc($resultado))
			{	
				$destino = $fila['url'];
				$sh = $fila['short_url'];
				$pass = $fila['password'];
				$activo = $fila['Activo'];
				$vence = $fila['Vence'];
				$visitas =$fila['visitas'];
				$tiempo = $fila['Tiempo'];
			}
			
			session_start();
			
			// store session data
			if(isset($_SESSION[$a]))
			{
				
			}
			else
			{
				$_SESSION[$a]=$a;
				//actulizar numero de visitas
				$visitas=$visitas+1;
				$sSQL="Update web_url Set visitas='$visitas' Where short_url='$sh'";
				mysql_query($sSQL,$con);
			}
		}
		else
		{
			echo "Error".mysqli_connect_error();
			exit;
		}
		
		while($fila = mysql_fetch_assoc($resultado))
		{	$destino = $fila['url'];
			$pass = $fila['password'];
			$activo = $fila['Activo'];
			$vence = $fila['Vence'];
			$tiempo = $fila['Tiempo'];
		}
		
		$fecha_actual = strtotime(date("Y-m-d H:i:00",time()));
		$fecha_cero = strtotime("0000-00-00 00:00:00");
		$fecha_activo = strtotime($activo);
		$fecha_vence = strtotime($vence);
		
		if($fecha_actual < $fecha_activo)
		{
			echo "El link no esta dispobible aun, intentalo mas tarde.";
			exit;
		}
		if($fecha_vence != $fecha_cero && $fecha_actual > $fecha_vence)
		{
			echo "Este link ya no esta disponible.";
			exit;
		}
		
			if(empty($pass)){
		?>
        

<meta http-equiv="refresh" content="<?php echo $tiempo ?>;URL= <?php echo $destino; ?> ">
<?php } ?>


</head>

<body>
<div id="cabecera" class="h">
Acortador BC...
</div>

	<?php 
			if(empty($pass)){
			if($tiempo < 1)
			{
				header("Location: ".$destino);
				exit;
			}
			echo "&nbsp;&nbsp;Seras redireccionado en ".$tiempo." segundos. <br/>";
			echo "&nbsp;&nbsp;Este link se ha visitado ".$visitas." veces. <br/><br/><br/>";
			echo '<img src="Imagenes/Anuncio.gif" alt="some_text">';
			echo '<div id="divR" style="display:none"> </div>';
		  }
          else
          {
			  echo '<div id="divRedi" style="display:block; margin:10px;">
			  			Ingrese la contrasena para ingresar a este sitio:				
        				<input id="hurl" type="hidden" value="'.$destino.' ">
						<input id="hvisi" type="hidden" value="'.$visitas.'">
        				<input id="htiempo" type="hidden" value="'.$tiempo.'">
        				<input id="hpass" type="hidden" value="'.$pass.'">
        
        				<input id="txtpass" type="text" placeholder="Contrasena">
        				<input type="submit" name="apass" id="apass" class="cpass" value="Enviar" onClick="Cp()">		
        
					</div>';
		  }
		  ?>

    &nbsp;&nbsp;<label id="momento"></label>
    <br/>
    &nbsp;&nbsp;<label id="visitas"></label>
    <br/><br/>
    <img src="Imagenes/Anuncio.gif" alt="some_text" style="display:none" id="imgA">
</body>
</html>

<?php	
	//cerrar la conexion
	@mysqli_close($con);
?>
