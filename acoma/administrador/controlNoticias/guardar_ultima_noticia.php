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
	noticias_ultimas
SET
	TITULO = '$titulo',
	DESCRIPCION = '$descripcion',
	FECHA_ALTA = NOW()
SQL;

mysqli_query($cnx, $consulta);

header ('Location: administrador_ultimas_noticias.php')

?>

</body>
</html>