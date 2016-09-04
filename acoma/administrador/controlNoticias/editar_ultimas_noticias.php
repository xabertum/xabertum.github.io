<?php
include ('../_setup.php');
$id = $_GET['id'];

$consulta=<<<SQL
SELECT TITULO, DESCRIPCION
FROM noticias_ultimas WHERE ID_UL_NOTICIA = '$id'
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

<h2>Modificar datos de noticia</h2>

	<form method="post" action="modificar_ultimas_noticias.php">
    	<label>Titulo</label>
        <input type="text" name="titulo" value="<?php echo $columnas['TITULO'];?>"/><br/><br/>
        <label>Descripción</label>
        <textarea name="descripcion" rows="5" cols="90"><?php echo $columnas['DESCRIPCION'];?></textarea>
        <input type="hidden" name="idgaleria" value="<?php echo $id; ?>"/>
		<br/>
        <input type="submit" value="Modificar Datos"/>
	</form>

</body>
</html>