<?php
include ('../_setup.php');

$fknoticia = $_POST['idnoticia'];
$nombre_file = mktime() . '.jpg';


$consulta = <<<SQL
UPDATE
	noticias
SET
	FOTO='$nombre_file'
WHERE
	IDNOTICIAS='$fknoticia'
SQL;

mysqli_query($cnx, $consulta);

$original = $_FILES['archivo']['tmp_name'];
$destino = "../images/noticias/$nombre_file";

move_uploaded_file( $original, $destino);


// Check connection
if (mysqli_connect_errno()) {
 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	} else {  
	print ("<script>window.location.replace('administrador_fotos_noticias.php?id=$fknoticia');</script>");
	}

?>

