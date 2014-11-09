<!doctype html>
<html>
<head>
<meta name="content-type" charset="utf-8">
</head>
<body>
<?php
// Carpeta de subida y debe tener permisos en esta carpeta
//$uploaddir = '/var/www/uploads/'; // en el caso de Linux o Unix
$uploaddir = 'c:/xampp/htdocs/Archivos/'; // en el casi de Windows

// Validar tamaño
    if ($_FILES["archivo"]["size"] < 2000000)   // en bytes 
    { 
	echo "	Archivo  con tamaño correcto  ";
	} else {
	echo "Tamaño excedido";
	exit;
	}

echo $_FILES["archivo"]["type"];
// Validar el MimeType
    if ($_FILES["archivo"]["type"] == "application/octet-stream") { 
	echo "	Archivo con tipo correcto";
	}
	else
	{
	echo "Archivo con tipo incorrecto";
	exit;
	}
	
// Error al subir
	if ($_FILES["archivo"]["error"] > 0) 
	{ 
    echo $_FILES["archivo"]["error"] . ""; 
    } 

$uploadfile = $uploaddir . basename($_FILES['archivo']['name']);

	if (move_uploaded_file($_FILES['archivo']['tmp_name'], $uploadfile)) 
	{
	echo "El archivo es válido y fue cargado exitosamente.\n";
	} 
	else 
	{
	echo "¡Posible ataque de carga de archivos!\n";
	}

echo 'Aquí hay más información de depurado:';
print_r($_FILES);
?>



<?php
/*multiple
foreach ($_FILES["pictures"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
        $name = $_FILES["pictures"]["name"][$key];
        move_uploaded_file($tmp_name, "data/$name");
    }
}*/
?>
</body></html>