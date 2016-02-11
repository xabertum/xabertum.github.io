

<?php

include ('../_setup.php');

$ID_news = $_POST['ID_news_mail'];
$news_mail = $_POST['news_mail'];
$id = $_POST['idnewsletter'];

$consulta = <<<SQL
UPDATE
	newsletter
SET
	ID_news_mail = '$ID_news',
	news_mail = '$news_mail'
WHERE
	ID_news_mail = '$id'
SQL;

mysqli_query($cnx, $consulta);



// Check connection
if (mysqli_connect_errno()) {
 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	} else {  
	$message = "Noticia modificada con exito";
	print "<script>alert('$message');</script>"; 
	}

header ('Location: administrador_newsletter.php')

?>
