<?php

//REGISTRAR la dirección

if(isset($_POST['url']))
// && isset($_POST['pass']) && isset($_POST['activo']) && isset($_POST['vence']) && isset($_POST['tiempo']))
{
	$conexion=mysqli_connect("localhost","root","","proyectoweb");
	//COMPROBAR SI HUBO UN ERROR EN LA CONEXION
	if(mysqli_connect_errno())
	{
		echo "Error al conectar con la BD. ".mysqli_connect_error();
	}
	else
	{
		$url=$_POST['url'];
		
		$Z = md5($url); 
        $A = substr($Z,0,2); //Obtenemos los primeros 2 caracteres del hash 
        $B = substr($Z,16,2); //Obtenemos 2 caracteres a partir del caracter 16 
        $C = substr($Z,30,2); //Obtenemos 2 caracteres a partir del caracter 30 
        $D = substr($Z,23,1); //Obtenemos 1 caractere a partir del caracter 23 
        $zCode = $A.$B.$C.$D; //Juntamos todo
		$short ='localhost/?a='.$A.$B.$C.$D;

		$vence=$_POST['vence'];
		$pass=$_POST['pass'];
		$activo=$_POST['activo'];
		$tiempo=$_POST['tiempo'];
		
		$consulta="insert into web_url
			(
				url,
				short_url,
				password,
				Activo,
				Vence,
				Tiempo		
			)
			values
			(
				'$url',
				'$short',
				'$pass',
				'$activo',
				'$vence',
				'$tiempo'
							
			);
		";
		
		if($resultado=mysqli_query($conexion,$consulta))
		{
			echo "$short";
		}
		else
		{
			echo "Error al acortar la dirección: ".mysqli_connect_error();
		}
		
	}
	//cerrar la conexion
	mysqli_close($conexion);
}
else
{echo "No hay url, no acortamos";}
?>