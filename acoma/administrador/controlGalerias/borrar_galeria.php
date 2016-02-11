<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
if ( isset($_GET['id'] ) ) {
	
$id = $_GET['id'];
	
include ('../_setup.php');	
$consulta=<<<SQL
DELETE FROM galerias
WHERE IDGALERIA='$id'
LIMIT 1
SQL;

mysqli_query($cnx, $consulta);

	$message0 = "Galeria borrada con exito";
	print "<script>alert('$message0');</script>"; 
	print ("<script>window.location.replace('index.php#container4');</script>");

}

else {  
	$message = "Galeria no encontrada en la base de datos";
	print "<script>alert('$message');</script>"; 
	}
header ('Location: administrador.php')

?>



</body>
</html>
