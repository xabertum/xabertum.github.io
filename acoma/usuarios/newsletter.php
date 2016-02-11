<?php

include('../administrador/_setup.php');

$email = $_POST['name'];

$consulta = <<<SQL
INSERT INTO
	newsletter
SET
	news_mail = '$email',
	fecha_alta = NOW()
SQL;

mysqli_query($cnx, $consulta);

?>
