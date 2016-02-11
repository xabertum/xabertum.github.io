<?php

include ('../_setup.php');

$nombre = $_POST['nombre'];
$apPaterno = $_POST['apPaterno'];
$apMaterno = $_POST['apMaterno'];
$correo = $_POST['correo'];
$username = $_POST['username'];
$tipoUsuario = $_POST['rad_TipoUsuario'];

$id = $_POST['idusuario'];

$consulta = <<<SQL
UPDATE
	tbl_users
SET
	tx_nombre = '$nombre',
	tx_apellidoPaterno = '$apPaterno',
	tx_apellidoMaterno = '$apMaterno',
	tx_correo = '$correo',
	tx_username = '$username',
	id_TipoUsuario = '$tipoUsuario'
WHERE
	id_usuario = '$id'
SQL;

mysqli_query($cnx, $consulta);



// Check connection
if (mysqli_connect_errno()) {
 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	} else {  
	$message = "Galeria modificada con exito";
	print "<script>alert('$message');</script>"; 
	}

header ('Location: administrador_usuarios.php')

?>
