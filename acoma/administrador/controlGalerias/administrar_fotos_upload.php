<?php
include ('../_setup.php');

$estado ='visible';
$titulo = $_POST['titulo']; 
$fkgaleria = $_POST['idgaleria'];
$nombre_file = mktime() . '.jpg';
$cantidad = $_POST['cantidad'];

	$posicion = $cantidad;

$consulta = <<<SQL
INSERT INTO
	fotos
SET
	NOMBRE='$titulo',
	ARCHIVO='$nombre_file',
	ESTADO= '$estado',
	POSICION='$posicion',
	FKGALERIA='$fkgaleria'
SQL;

mysqli_query($cnx, $consulta);

$original = $_FILES['archivo']['tmp_name'];
$destino = "../images/galerias/$nombre_file";

move_uploaded_file( $original, $destino);


// Check connection
if (mysqli_connect_errno()) {
 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	} else {  
	print ("<script>window.location.replace('administrar_fotos.php?id=$fkgaleria');</script>");
	}

?>

