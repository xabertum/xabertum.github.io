<?php
include('../_setup.php');
$id = $_GET['id'];

$consulta=<<<SQL
SELECT
	IDFOTO,
    ARCHIVO,
    NOMBRE,
    ESTADO
FROM
    fotos
WHERE
    FKGALERIA='$id'
ORDER BY
    POSICION ASC
SQL;

$filas = mysqli_query ($cnx, $consulta);

$consulta_titulo = <<<SQL
SELECT 
	TITULO
FROM
	galerias
WHERE
	IDGALERIA='$id'
SQL;

$filas_titulo = mysqli_query ($cnx, $consulta_titulo);

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<link type="text/css" rel="Stylesheet" href="../css/administrar_fotos.css" />

</head>

<body>
<div id="freeow" class="freeow freeow-top-right"></div>

	<h1>Panel de control</h1><a href="administrador.php">Volver a Listado de galerias</a>
    <h2>Administración de Fotos de Galeria nº<?php echo $id; ?> / <?php while ($columna_titulo = mysqli_fetch_assoc($filas_titulo)) { echo "$columna_titulo[TITULO]"; } ?></h2>
	
   <h3>Ordenar las fotos</h3>
	
	<form id="fotos" method="post" action="administrar_fotos_ordenar.php"><?php
	$cantidad = 0;
    while ( $columna = mysqli_fetch_assoc($filas) ) {
    $cantidad++;
	echo '<div class="fotosOrdenar '.$columna['ESTADO'].'">';
    echo "<p>Titulo: $columna[NOMBRE]</p>";
    echo "<img src='../images/galerias/$columna[ARCHIVO]' height='200' />";
    echo "<p>Orden: <a href='#'>delante</a> | <a href='#'>atrás</a><select id='select' name='estado[]'><option>visible</option><option";
	if ($columna['ESTADO'] == 'invisible' ) {echo ' selected="selected"';}
	echo ">invisible</option><option>borrar</option></select></p>";
	echo "<input type='hidden' name='filename[]' value='$columna[ARCHIVO]' />";
	echo "<input type='hidden' name='posicion[]' value='$columna[IDFOTO]' />";
    echo '</div>';
	}
	?>
	<div id="GuardarCambios"><input type="submit" id="guardar_posicion" value="Guardar cambios" /></div>
	<input type="hidden" name="idgaleria" value="<?php echo $id; ?>"></form>
	<script>
		var form = document.getElementById('fotos');
		var divs = form.getElementsByTagName('div');
		for (var i=0; i < divs.length; i++){
			var botones = divs[i].getElementsByTagName('a');
			var btn_subir = botones[0];
			var btn_bajar = botones[1];
			
				btn_subir.onclick = function() {
					var div = this.parentNode.parentNode;
					var anterior = div.previousSibling;	
					if (anterior != null) {
						div.parentNode.insertBefore (div, anterior);
					}
				}
				
				btn_bajar.onclick = function () {
					var div = this.parentNode.parentNode;
					var siguiente = div.nextSibling;
					if (siguiente != null && siguiente.id != 'guardar_posicion'){
						div.parentNode.insertBefore (siguiente, div);
					}
				}
		}
	</script>

   <hr />   
   <h3>Subir fotos nuevas</h3>
    
    <form method="post" enctype="multipart/form-data" action="administrar_fotos_upload.php">
    	<input type="hidden" name="idgaleria" value="<?php echo $id; ?>" />
		<input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>" />
		<div id="inputs_file">
			<div>
				<label>Titulo</label>
				<input type="text" name="titulo" />
				<label>Archivo</label>
				<input type="file" name="archivo" />
			</div>
		</div><br/>
        <input type="submit" value="Agregar foto" />
</form>

</body>
</html>