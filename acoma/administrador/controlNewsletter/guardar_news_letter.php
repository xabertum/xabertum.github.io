<?php

include ('../_setup.php');

$news_mail = $_POST['news_mail'];


$consulta = <<<SQL
INSERT INTO
	newsletter
SET
	news_mail = '$news_mail',
	FECHA_ALTA = NOW()
SQL;

mysqli_query($cnx, $consulta);

header ('Location: administrador_newsletter.php')

?>
