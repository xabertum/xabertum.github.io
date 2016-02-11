
<?php
if ( isset($_GET['id'] ) ) {
	
$id = $_GET['id'];
	
include ('../_setup.php');	
$consulta=<<<SQL
DELETE FROM noticias_ultimas
WHERE ID_UL_NOTICIA='$id'
LIMIT 1
SQL;

mysqli_query($cnx, $consulta);

}

header ('Location: administrador_ultimas_noticias.php')

?>
