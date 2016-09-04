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
DELETE FROM tbl_users
WHERE id_usuario='$id'
LIMIT 1
SQL;

mysqli_query($cnx, $consulta);

}

header ('Location: administrador_usuarios.php')

?>



</body>
</html>
