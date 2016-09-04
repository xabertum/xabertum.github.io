<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ACOMA | Asociación de Comerciantes de la Madera</title>
</head>
<body>

<?php
include('../_setup.php');

$idgaleria = $_POST['idgaleria'];

$posicion = -1;

foreach ($_POST['posicion'] as $numero=>$idfoto ) {
$nuevo_estado = $_POST['estado'][$numero];

if ($nuevo_estado == 'borrar' ) {
	
$file_name = $_POST['filename'][$numero];
if (file_exists ('images/galerias/'.$file_name) ){
	
	unlink('images/galerias/'.$file_name );
}

$consulta = <<<SQL
	DELETE FROM fotos WHERE IDFOTO='$idfoto' LIMIT 1

SQL;



} else {

$posicion++;
$consulta=<<<SQL
	UPDATE fotos SET POSICION='$posicion', ESTADO='$nuevo_estado' WHERE IDFOTO='$idfoto' LIMIT 1
SQL;

}

 mysqli_query ($cnx, $consulta);

}

// Check connection
if (mysqli_connect_errno()) {
 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	} else { ?>  
	<script>alert('Cambios guardados con exito en la base de datos.');</script>
<?php
	}
?>
	<script>window.location.replace('administrar_fotos.php?id=<?php echo $idgaleria ?>');</script>

</body>
</html>