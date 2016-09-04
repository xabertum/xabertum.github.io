<style>
.thCenter { text-align:center; }

</style>

<?php 
include ('../_setup.php');

$consulta = <<<SQL
SELECT
	IDGALERIA,
	TITULO,
	DESCRIPCION,
	DATE_FORMAT (FECHA_ALTA , '%d/%m/%Y %H:%i' ) as FECHA_ALTA
FROM
	galerias
SQL;

$filas = mysqli_query($cnx, $consulta);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<h1>Panel de Control</h1>
    <h2>Listado de Galerias</h2>

    <table border="1">
    	<tr>
        	<th>ID Galeria</th>
        	<th>Nombre</th>
            <th>Descripción</th>
            <th>Fecha de alta</th>
            <th>Acciones</th>
         <tr>
         <?php
		 while ( $columna = mysqli_fetch_assoc ( $filas ) ){
		 	echo "<tr>";
			echo "<td class='thCenter'>$columna[IDGALERIA]</td>";
			echo "<td>$columna[TITULO]</td>";
			echo "<td>$columna[DESCRIPCION]</td>";
			echo "<td class='thCenter'>$columna[FECHA_ALTA]</td>"; 
		 	echo "<td class='thCenter'><a href='editar_galeria.php?id=$columna[IDGALERIA]'>editar</a> | 
					  <a href='borrar_galeria.php?id=$columna[IDGALERIA]'>borrar</a> | 
					  <a href='administrar_fotos.php?id=$columna[IDGALERIA]'>administrar fotos</a></td>";
			echo "</tr>";
		 }
		 
		 ?>
	</table>
    </br>    
    <div>
    	<form action="nueva_galeria.php">
    		<input type="submit" value="CREAR UNA NUEVA GALERIA">
		</form>
	</div>

    
    
</body>
</html>