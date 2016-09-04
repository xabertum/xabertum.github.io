<?php 
include('../administrador/_setup.php');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">

<link href="css/noticias.css" rel="stylesheet" type="text/css">

</head>

<body>
	
	<center><p class="titulocont2">Espacio de <span class="colortitulo">Noticias</span></p>
      <p class="texto1cont2">Vivamus bibendum <span class="colortexto">vehicula leo</span> sit amet sollicitudin. In hendrerit viverra lobortis.<br>
      In a nulla ut erat consectetur feugiat. Praesent pulvinar risus nec varius <span class="colortexto">consectetur</span>. Praesent ac eros velit.</p></center>
	
	<div id="galeriasCont">
	
	<?php

	$subconsulta=<<<SQL
SELECT
	ID_UL_NOTICIA,
	TITULO,
	DESCRIPCION,
	DATE_FORMAT ( FECHA_ALTA, '%d/%m/%Y - %H:%i' ) FECHA
FROM
	noticias_ultimas
ORDER BY
	FECHA_ALTA DESC
SQL;

			$filas2 = mysqli_query($cnx, $subconsulta);

			while ($datos = mysqli_fetch_assoc($filas2)) {

			echo "<div id='noticiasCont1'>";
			echo "<div><span id='textoNoticias'>$datos[FECHA]</span></div>";
			echo "<span class='colortexto2'>$datos[TITULO].</span>".substr($datos['DESCRIPCION'],0,100).'...'. '<br/><br/>';
			echo "<a href='noticias_completa.php?Unot=$datos[ID_UL_NOTICIA]'>Ver noticia</a>";
			echo "</div>";
			}

	
	$consulta=<<<SQL
SELECT
	IDNOTICIAS,
	TITULO,
	FOTO,
	DESCRIPCION,
	DATE_FORMAT ( FECHA_ALTA, '%d/%m/%Y - %H:%i' ) FECHA
FROM
	noticias
ORDER BY
	FECHA_ALTA DESC
SQL;
		
		$filas = mysqli_query ($cnx, $consulta);

		
		while ($columna = mysqli_fetch_assoc($filas)) {
			
			$id = $columna['IDNOTICIAS'];

			$nombre_archivo = $columna['FOTO'];

			echo "<div id='noticiasCont2'>";
			echo "<h3><span class='colortexto3'>$columna[TITULO]</span></h3>";
			echo "<div id='fechaNoticias'>$columna[FECHA]</div>";

			if ($nombre_archivo == null) {
				echo "<img src='images/sinImagenes.png' alt='Preview de la Galeria'/>";
				
			} else {		
				echo "<img src='resize_noticias.php?r=$nombre_archivo' alt='Preview de la Galeria'/>";
			}

			echo "<p>".substr($columna['DESCRIPCION'],0,170).'...'."</p>";
			echo "<a href='noticias_completa.php?not=$columna[IDNOTICIAS]'>Ver noticia</a>";
			echo "</div>";
			}
	?>

	</div>
	
</body>
</html>
