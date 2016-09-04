<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

</head>

<body>

<?php

include ('../_setup.php');

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];


$consulta = <<<SQL
INSERT INTO
	galerias
SET
	TITULO = '$titulo',
	DESCRIPCION = '$descripcion',
	FECHA_ALTA = NOW()
SQL;

mysqli_query($cnx, $consulta);

// Check connection
if (mysqli_connect_errno()) {
 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	} 
    
else {  
	$message = "Galeria guardada con exito en la base de datos";
	print "<script>alert('$message');</script>"; 
	}
header ('Location: administrador.php')

?>

</body>
</html>