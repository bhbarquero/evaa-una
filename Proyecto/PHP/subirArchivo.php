<?php

//REGISTRAR la dirección
if(isset($_FILES['archivo']['name'])){
session_start();
$uploaddir = 'c:/xampp/htdocs/Archivos/'.$_POST['Id'].$_SESSION['user']; // en el casi de Windows
$dirg ='../Archivos/'.$_POST['Id'].$_SESSION['user'];
// Validar tamaño
    if ($_FILES["archivo"]["size"] < 2000000)   // en bytes 
    { 
		// Validar el MimeType
		//if ((($_FILES["archivo"]["type"] == "image/gif") || 
		//($_FILES["archivo"]["type"] == "image/jpeg") || 
		//($_FILES["archivo"]["type"] == "image/pjpeg"))) { 
		
			$uploadfile = $uploaddir . basename($_FILES['archivo']['name']);
		
			if (move_uploaded_file($_FILES['archivo']['tmp_name'], $uploadfile)) 
			{
				echo $dirg.$_FILES['archivo']['name'];
			} 
			else 
			{
				//echo"Error";
			}
	}
	else
	{
		//echo "Archivo incorrecto del tipo incorrecto".$_FILES["archivo"]["type"];
		exit;
	}
} else {
		
		//echo "Tamaño excedido";
}
//}else
	//echo "";

/*
	
// Error al subir
	if ($_FILES["archivo"]["error"] > 0) 
	{ 
    echo $_FILES["archivo"]["error"] . ""; 
    } 

*/
?>