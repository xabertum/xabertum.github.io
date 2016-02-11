

<?php

include ('../_setup.php');

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$id = $_POST['idgaleria'];

$consulta = <<<SQL
UPDATE
	galerias
SET
	TITULO = '$titulo',
	DESCRIPCION = '$descripcion'
WHERE
	IDGALERIA = '$id'
SQL;

mysqli_query($cnx, $consulta);



// Check connection
if (mysqli_connect_errno()) {
 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	} else {  
	$message = "Galeria modificada con exito";
	print "<script>alert('$message');</script>"; 
	}

header ('Location: administrador.php')

?>
