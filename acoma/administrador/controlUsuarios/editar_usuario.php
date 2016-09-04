<?php
include ('../_setup.php');
$id = $_GET['id'];

$consulta=<<<SQL
SELECT tx_nombre, tx_apellidoPaterno, tx_apellidoMaterno, tx_correo, tx_username, tx_password
FROM tbl_users WHERE id_usuario  = '$id'
LIMIT 1
SQL;

$filas = mysqli_query ($cnx, $consulta);
$columnas = mysqli_fetch_assoc($filas);

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<style>
input {display:block}

#radio {
	display:inline-block;	
	
}

</style>

</head>

<body>

<h2>Modificar Datos de Usuario</h2>


	<form method="post" action="modificar_usuario.php">
    	<label>Nombre</label>
        <input type="text" name="nombre" size="30" value="<?php echo $columnas['tx_nombre'];?>"/><br/>
        <label>Apellido 1</label>
        <input type="text" name="apPaterno" size="30" value="<?php echo $columnas['tx_apellidoPaterno'];?>"/><br/>
        <label>Apellido 2</label>
		<input type="text" name="apMaterno" size="30" value="<?php echo $columnas['tx_apellidoMaterno'];?>"/><br/>
        <label>Correo</label>
        <input type="text" name="correo" size="30" value="<?php echo $columnas['tx_correo'];?>"/><br/>
        <label>Nombre de Usuario</label>
        <input type="text" name="username" size="30" value="<?php echo $columnas['tx_username'];?>"/><br/>
        <label>Tipo de Usuario</label> <br/>
		<input id="radio" type="radio" name="rad_TipoUsuario" id="rad_TipoUsuario" value="2" /> Asociado 
		<input id="radio" type="radio" name="rad_TipoUsuario" id="rad_TipoUsuario" value="1"  /> Administrador
		<br/><br/>
        <input type="hidden" name="idusuario" value="<?php echo $id; ?>"/>
        <input type="submit" value="Modificar Datos"/>
	</form>


</body>
</html>