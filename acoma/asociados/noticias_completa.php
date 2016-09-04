<?php 
include('../administrador/_setup.php');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">

<link href="css/noticias_completas.css" rel="stylesheet" type="text/css">

</head>

<body>
	
	<center><p class="titulocont2">Espacio de <span class="colortitulo">Noticias</span></p>
      <p class="texto1cont2">Vivamus bibendum <span class="colortexto">vehicula leo</span> sit amet sollicitudin. In hendrerit viverra lobortis.<br>
      In a nulla ut erat consectetur feugiat. Praesent pulvinar risus nec varius <span class="colortexto">consectetur</span>. Praesent ac eros velit.</p></center>
	
	<div id="galeriasCont">
	
	<?php
	if ( isset ($_GET['Unot'] )) {
		
		$id = $_GET['Unot'];
		$consulta = "SELECT * , DATE_FORMAT ( FECHA_ALTA, '%d/%m/%Y - %H:%i' ) FECHA FROM noticias_ultimas WHERE ID_UL_NOTICIA='$id'";
		$filas = mysqli_query ($cnx, $consulta);
		$col = mysqli_fetch_assoc($filas);
		
		echo "<div id='noticiasCont1'>";
		echo "<h2><span class='colortexto'> $col[TITULO]</span></h2>";
		echo "<div id='fechaNoticias'>$col[FECHA]</div>";

		echo "<p>$col[DESCRIPCION]</p>";
		echo "<a href='noticias.php'>Volver a listado de noticias</a>";

		echo "</div>";
		
		} 

	if ( isset ($_GET['not'] )) {
		
		$id = $_GET['not'];
		$consulta = "SELECT * , DATE_FORMAT ( FECHA_ALTA, '%d/%m/%Y - %H:%i' ) FECHA FROM noticias WHERE IDNOTICIAS='$id'";
		$filas = mysqli_query ($cnx, $consulta);
		$col = mysqli_fetch_assoc($filas);
		$nombre_archivo = $col['FOTO'];

		
		echo "<div id='noticiasCont2'>";
		echo "<h2><span class='colortexto'> $col[TITULO]</span></h2>";
		echo "<div id='fechaNoticias'>$col[FECHA]</div>";
		if ($nombre_archivo == null) {
			echo "<img src='images/sinImagenes.png' alt='Preview de la Galeria'/>";
			
		} else {		
			echo "<img src='resize_noticias_completas.php?r=$nombre_archivo' alt='Preview de la Galeria'/>";
		}
		echo "<p>$col[DESCRIPCION]</p>";
		echo "<a href='noticias.php'>Volver a listado de noticias</a>";
		echo "</div>";
		
		} 
?>	
	
</body>
</html>
