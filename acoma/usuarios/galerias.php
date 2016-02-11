<?php 
include('../administrador/_setup.php');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">

<link href="css/galerias.css" rel="stylesheet" type="text/css">

</head>

<body>
	
	<center><p class="titulocont2">Cajón de <span class="colortitulo">Fotos</span></p>
      <p class="texto1cont2">Vivamus bibendum <span class="colortexto">vehicula leo</span> sit amet sollicitudin. In hendrerit viverra lobortis.<br>
      In a nulla ut erat consectetur feugiat. Praesent pulvinar risus nec varius <span class="colortexto">consectetur</span>. Praesent ac eros velit.</p></center>
	
	<div id="galeriasCont">
	
	<?php
	if ( isset ($_GET['gal'] )) {
		$id = $_GET['gal'];
		$consulta = "SELECT DESCRIPCION, TITULO FROM galerias WHERE IDGALERIA='$id'";
		$filas = mysqli_query ($cnx, $consulta);
		$col = mysqli_fetch_assoc($filas);
		
		
		echo "<div id='galeriasCont2'>";
		echo "<h2><span class='colortexto'> $col[TITULO]</span></h2>";
		echo "<a href='galerias.php'>Volver a listado de galerias</a>";
		echo "<p>$col[DESCRIPCION]</p>";
		echo "</div>";
		
		
		echo '<div id=listadoFotos>';
				
		$consulta2 = "SELECT ARCHIVO, NOMBRE FROM fotos WHERE FKGALERIA='$id' AND ESTADO='visible' ORDER BY POSICION ASC";

		$filas2 = mysqli_query ($cnx, $consulta2);
		while ($col = mysqli_fetch_assoc($filas2)) {  
	
			$archivo_foto = $col['ARCHIVO'];

			echo "<div>";
			echo "<img src='resize_galerias.php?r=$archivo_foto' alt='".$col['NOMBRE']."' />";
			echo '<p id="tituloFoto">'.$col['NOMBRE'].'</p>';
			echo '</div>';
		
		
		}
		echo '</div>';

	
	} else { 
	
	
	$consulta=<<<SQL
SELECT
	IDGALERIA,
	TITULO,
	DESCRIPCION,
	DATE_FORMAT ( FECHA_ALTA, '%d/%m/%Y' ) FECHA
FROM
	galerias
ORDER BY
	FECHA_ALTA DESC
SQL;
		
		$filas = mysqli_query ($cnx, $consulta);
	
		while ($columna = mysqli_fetch_assoc($filas)) {
		
			$id = $columna['IDGALERIA'];
			$subconsulta = "SELECT ARCHIVO FROM fotos WHERE FKGALERIA='$id' AND ESTADO='visible' LIMIT 1";
			$filas2 = mysqli_query($cnx, $subconsulta);
			$datos = mysqli_fetch_assoc($filas2);
			
			$nombre_archivo = $datos['ARCHIVO'];
			
			echo "<div>";
			echo "<h2><span class='colortexto'>$columna[TITULO]</span></h2>";
			echo "<div>Fecha de alta: $columna[FECHA]</div>";
			
			if ($nombre_archivo == null) {
				echo "<img src='../images/sinImagenes.png' alt='Preview de la Galeria'/>";
				
			} else {		
				echo "<img src='resize_galerias.php?r=$nombre_archivo' alt='Preview de la Galeria'/>";
			}
			
			echo "<p>Descripción:<br/><br/>$columna[DESCRIPCION]</p>";
			echo "<a href='galerias.php?gal=$columna[IDGALERIA]'>Ver galeria</a>";
			echo "</div>";
			}
    }
	?>

	</div>
	
</body>
</html>
