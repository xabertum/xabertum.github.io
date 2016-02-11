<style>
.thCenter { text-align:center; }

</style>

<?php 
include ('../_setup.php');

$consulta = <<<SQL
SELECT
	IDNOTICIAS,
	TITULO,
	DESCRIPCION,
	DATE_FORMAT (FECHA_ALTA , '%d/%m/%Y %H:%i' ) as FECHA_ALTA
FROM
	noticias
ORDER BY
    FECHA_ALTA ASC
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
    <h2>Listado de Noticias</h2>

    <table border="1">
    	<tr>
        	<th>ID Noticia</th>
        	<th>Título</th>
            <th>Descripción</th>
            <th>Fecha de alta</th>
            <th>Acciones</th>
         <tr>
         <?php
		 while ( $columna = mysqli_fetch_assoc ( $filas ) ){
		 	echo "<tr>";
			echo "<td class='thCenter'>$columna[IDNOTICIAS]</td>";
			echo "<td>$columna[TITULO]</td>";
			echo "<td>$columna[DESCRIPCION]</td>";
			echo "<td class='thCenter'>$columna[FECHA_ALTA]</td>"; 
		 	echo "<td class='thCenter'><a href='editar_noticia.php?id=$columna[IDNOTICIAS]'>editar</a> | 
					  <a href='borrar_noticia.php?id=$columna[IDNOTICIAS]'>borrar</a> | 
					  <a href='administrador_fotos_noticias.php?id=$columna[IDNOTICIAS]'>administrar fotos</a></td>";
			echo "</tr>";
		 }
		 
		 ?>
	</table>
    </br>    
    <div>
    	<form action="../controlNoticias/nueva_noticia.php">
    		<input type="submit" value="CREAR UNA NUEVA NOTICIA">
		</form>
	</div>

    
    
</body>
</html>