<?php
include('../_setup.php');
$id = $_GET['id'];

$consulta=<<<SQL
SELECT
	TITULO
FROM
    noticias
WHERE
    IDNOTICIAS='$id'
SQL;

$filas = mysqli_query ($cnx, $consulta);


$subconsulta=<<<SQL
SELECT
	FOTO
FROM
    noticias
WHERE
    IDNOTICIAS='$id'
SQL;

$filas2 = mysqli_query ($cnx, $subconsulta);

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<link type="text/css" rel="Stylesheet" href="../css/administrar_fotos.css" />

</head>

<body>

	<h1>Panel de control</h1><a href="administrador_noticias.php">Volver a Listado de noticias</a>
    <h2>Administración de Fotos de Noticia nº<?php echo $id; ?> / <?php while ($columna = mysqli_fetch_assoc($filas)) { echo "$columna[TITULO]"; } ?></h2>
	
   <h3>Visualizar foto noticia</h3>
	
<?php

	while ($columna2 = mysqli_fetch_assoc($filas2)) {
	
	$foto = $columna2['FOTO'];
	
	echo "<div>";
	if ($foto == null) {
	echo "<img src='../images/sinImagenes.png' alt='Preview de la Galeria'/>";
	} else {		
	echo "<img src='../images/noticias/$columna2[FOTO]' height='200' />";
	}
	echo "<input type='hidden' name='filename[]' value='$columna[FOTO]' />";
    echo "</div>";
	}
?>

   <hr/>   
   <h3>Subir foto nuevas</h3>
    
    <form method="post" enctype="multipart/form-data" action="administrar_fotos_noticias_upload.php">
    	<input type="hidden" name="idnoticia" value="<?php echo $id; ?>" />
		<div id="inputs_file">
			<div>
				<input type="file" name="archivo" />
			</div>
		</div><br/>
        <input type="submit" value="Agregar foto" />
</form>


</body>
</html>