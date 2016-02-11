<?php
include ('../_setup.php');
$id = $_GET['id'];

$consulta=<<<SQL
SELECT ID_news_mail, news_mail
FROM newsletter WHERE ID_news_mail = '$id'
LIMIT 1
SQL;

$filas = mysqli_query ($cnx, $consulta);
$columnas = mysqli_fetch_assoc($filas);

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<style>
	label { display:block; }
	textarea { display:block; }
</style>


</head>

<body>

<h2>Modificar datos de direccion para newsletter</h2>

	<form method="post" action="modificar_news_mail.php">
    	<label>ID</label>
        <input type="text" name="ID_news_mail" value="<?php echo $columnas['ID_news_mail'];?>"/><br/><br/>
        <label>Direccion</label>
        <input type="email" name="news_mail" size="50" value="<?php echo $columnas['news_mail'];?>"/>
        <input type="hidden" name="idnewsletter" value="<?php echo $id; ?>"/>
		<br/><br/>
        <input type="submit" value="Modificar Datos"/>
	</form>

</body>
</html>