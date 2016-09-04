
<?php
if ( isset($_GET['id'] ) ) {
	
$id = $_GET['id'];
	
include ('../_setup.php');	
$consulta=<<<SQL
DELETE FROM newsletter
WHERE ID_news_mail='$id'
LIMIT 1
SQL;

mysqli_query($cnx, $consulta);
}

header ('Location: administrador_newsletter.php')

?>
