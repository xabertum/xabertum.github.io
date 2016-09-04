<?php 
include ('../_setup.php');

$consulta = <<<SQL
SELECT *
	FROM
	tbl_users
SQL;

$filas = mysqli_query($cnx, $consulta);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<style>
.modalDialog {
	position: fixed;
	font-family: Arial, Helvetica, sans-serif;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0,0,0,0.8);
	z-index: 99999;
	opacity:0;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;
	pointer-events: none;

}

.modalDialog:target {
	opacity:1;
	pointer-events: auto;
}

.modalDialog > div {
	width: 700px;
	position: relative;
	top: -25px;
	margin: 10% auto;
	padding: 5px 20px 13px 20px;
	border-radius: 10px;
	background: #eee;
}

.close {
	background: #606061;
	color: #FFFFFF;
	line-height: 25px;
	position: absolute;
	right: -12px;
	text-align: center;
	top: -10px;
	width: 24px;
	text-decoration: none;
	font-weight: bold;
	-webkit-border-radius: 12px;
	-moz-border-radius: 12px;
	border-radius: 12px;
	-moz-box-shadow: 1px 1px 3px #000;
	-webkit-box-shadow: 1px 1px 3px #000;
	box-shadow: 1px 1px 3px #000;
}

.close:hover { background: #EEA640; }

#ifrmRegistro {
	border-style: none;
	width: 800px;
	height: 470px;
	padding-left: 25px;	
	display: inline-block;
}

.thCenter {
	text-align: center;
}

</style>


</head>

<body>
	<h1>Panel de Control</h1>
    <h2>Listado de Usuarios</h2>

    <table border="1">
    	<tr>
        	<th>Nº Usuario</th>
            <th>Nombre</th>
            <th>Apellido 1</th>
            <th>Apellido 2</th>
            <th>E-mail</th>
            <th>Username</th>
            <th>Contraseña</th>
            <th>Tipo de Usuario</th>
            <th>Fecha Alta</th>
			<th>Acciones</th>		

         </tr>
         <?php
		 while ( $columna = mysqli_fetch_assoc ( $filas ) ){
		 	echo "<tr>";
			echo "<td class='thCenter'>$columna[id_usuario]</td>";
			echo "<td>$columna[tx_nombre]</td>";
			echo "<td>$columna[tx_apellidoPaterno]</td>"; 
			echo "<td>$columna[tx_apellidoMaterno]</td>"; 
			echo "<td>$columna[tx_correo]</td>"; 
			echo "<td>$columna[tx_username]</td>"; 
			echo "<td>$columna[tx_password]</td>";
			
			$admin = "Administrador";
			$usr = "Asociado"; 
			 
			if ($columna['id_TipoUsuario'] == 1) {
			
			echo "<td>$columna[id_TipoUsuario] - $admin</td>";}
			
			if ($columna['id_TipoUsuario'] == 2) {
			
			echo "<td>$columna[id_TipoUsuario] - $usr</td>";}

			echo "<td>$columna[dt_registro]</td>"; 
		 	echo "<td class='thCenter'><a href='editar_usuario.php?id=$columna[id_usuario]'>editar</a> | 
					  <a href='borrar_usuario.php?id=$columna[id_usuario]'>borrar</a>";
			echo "</tr>";
		 }
		 
		 ?>
	</table>
    </br> 
		<div id="openModal" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<iframe id="ifrmRegistro" src="registroUsuariosAdmin.php"></iframe>
			</div>
		</div>
	   
    <div>
    	<form action="#openModal">
    		<input type="submit" value="CREAR UN NUEVO USUARIO">
		</form>
	</div>

    
    
</body>
</html>