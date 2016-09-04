<style>
.thCenter { text-align:center; }

</style>

<?php 
include ('../_setup.php');

$consulta = <<<SQL
SELECT
	ID_news_mail,
	news_mail,
	DATE_FORMAT (fecha_alta , '%d/%m/%Y %H:%i' ) as FECHA_ALTA
FROM
	newsletter
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
    <h2>Listado de direcciones para la Newsletter</h2>

    <table border="1">
    	<tr>
        	<th>ID Mail</th>
        	<th>Correo electrónico</th>
            <th>Fecha de alta</th>
            <th>Acciones</th>
         <tr>
         <?php
		 while ( $columna = mysqli_fetch_assoc ( $filas ) ){
		 	echo "<tr>";
			echo "<td class='thCenter'>$columna[ID_news_mail]</td>";
			echo "<td>$columna[news_mail]</td>";
			echo "<td class='thCenter'>$columna[FECHA_ALTA]</td>"; 
		 	echo "<td class='thCenter'><a href='editar_news_mail.php?id=$columna[ID_news_mail]'>editar</a> | 
					  <a href='borrar_news_mail.php?id=$columna[ID_news_mail]'>borrar</a></td>";
			echo "</tr>";
		 }
		 
		 ?>
	</table>
    </br>    
    <div>
    	<form action="nueva_news_mail.php">
    		<input type="submit" value="AÑADIR UNA NUEVA DIRECCION">
		</form>
	</div>

    
    
</body>
</html>