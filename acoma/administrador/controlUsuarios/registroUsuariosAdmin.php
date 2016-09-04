<?php
 
$str_nombre     = "";
$str_apPaterno  = "";
$str_apMaterno  = "";
$str_correo     = "";
$str_username   = "";
$str_password   = "";
$str_password2  = "";
 
if( isset($_POST['str_nombre']) )       
    $str_nombre     = trim($_POST['str_nombre']);
if( isset($_POST['str_apPaterno']) ) 
    $str_apPaterno  = trim($_POST['str_apPaterno']);
if( isset($_POST['str_apMaterno']) ) 
    $str_apMaterno  = trim($_POST['str_apMaterno']);
if( isset($_POST['str_correo']) ) 
    $str_correo     = trim($_POST['str_correo']);
if( isset($_POST['str_username']) ) 
    $str_username   = trim($_POST['str_username']);
if( isset($_POST['str_password']) ) 
    $str_password   = trim($_POST['str_password']);
if( isset($_POST['str_password2']) ) 
    $str_password2  = trim($_POST['str_password2']);
 
 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
    <title>.:: Registrar Usuario ::. </title>
 
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="../../usuarios/css/registro.css" type="text/css">
    <script src="../../usuarios/js/jQuery.js" type="text/javascript"></script>
    <script src="../../usuarios/js/jquery.validate.js" type="text/javascript"></script>
 
    <script type="text/javascript">
    <!--
        $().ready(function() {
        $("#registrar_usuario").validate({
        rules: {
        /*A continuacion los nombres de los campos y sus reglas a cumplir */
            tx_nombre: {
                required: true, minlength: 3
            },
            tx_apPaterno: {
                required: true, minlength: 3
            },
            tx_apMaterno: {
                required: true, minlength: 3
            },
            tx_correo: {
                required: true, minlength: 5, email: true
            },
            tx_username: {
                required: true, minlength: 5
            },
            tx_password: {
                required: true, minlength: 5
            },
            tx_password2: {
                required: true, minlength: 5,   equalTo: "#tx_password"
            }
 
        },
        /*A continuacion los campos y los mensajes en caso de que no se cumplan las reglas */
        messages: {
            tx_nombre: {
                required: "Por favor, escriba su Nombre.",
                minlength: jQuery.format("Su Nombre como minimo debe tener {0} caracteres.")
            },
            tx_apPaterno: {
                required: "Por favor, escriba su Apellido Paterno.",
                minlength: jQuery.format("Su Apellido Paterno como minimo debe tener {0} caracteres.")
            },
            tx_apMaterno: {
                required: "Por favor, escriba su Apellido Materno.",
                minlength: jQuery.format("Su Apellido Materno como minimo debe tener {0} caracteres.")
            },
            tx_correo: {
                required: "Por favor, escriba una direccion de correo electronico valida.",
                minlength: jQuery.format("Por favor, escriba una direccion de correo electronico valida.")
            },
            tx_username: {
                required: "Por favor, escriba un nombre de usuario. Este dato le servira para iniciar sesion y ver el contenido.",
                minlength: jQuery.format("Su nombre de usuario como minimo debe tener {0} caracteres.")
            },
            tx_password: {
                required: "Por favor, escriba una contrase?a.",
                minlength: jQuery.format("Su contrase?a como minimo debe tener {0} caracteres.")
            },
            tx_password2: {
                required: "Por favor, repita la contrase?a anterior.",
                minlength: jQuery.format("Su contrase?a como minimo debe tener {0} caracteres."),
                equalTo: "Por favor, repita la contrase?a anterior.",
            }
 
        }
 
        });
        $("#tx_nombre").focus();
        });
    // -->
    </script>
 
</head>
<body>
<br />
 
 
<form id="registrar_usuario" name="registrar_usuario"  method="POST" action="guardarRegistroAdmin.php">
 
<table align="center" width="600px">
 
<tr>
    <td colspan="2" align="center"><h3><b>Registrar usuario</b></h3></td>
</tr>
 
<tr>
    <td colspan="2">Para registrar nuevos usarios, solo debe rellenar
    los siguientes campos y pulsar el boton <b>Registrar</b>. La cuenta se activará y se podra acceder
	inmediatamente con el usuario y contraseña indicados.<br /><br />
    </td>
</tr>
     
    <?php
        //Si llega el parametro error y no viene vacio
        if( isset( $_POST['error'] ) && $_POST['error'] != '' ) {
    ?>
        <tr>
            <td colspan="2" >
                <font color="red">
                <ul>
                    <?php
                        echo $_POST['msgs_error'];
                    ?>
                </ul>
                </font>
            </td>
        </tr>
    <?php
        }
    ?>
 
     
    <tr>
        <td><label for="tx_nombre">Nombre(s)</label></td>
        <td>
            <input type="text" name="tx_nombre" id="tx_nombre" value='<?php echo $str_nombre ?>' size="30"  maxlength="30" />
        </td>
    </tr>
    <tr>
        <td><label for="tx_apPaterno">Apellido paterno</label></td>
        <td>
            <input type="text" name="tx_apPaterno" id="tx_apPaterno" value='<?php echo $str_apPaterno ?>' size="30"  maxlength="30" />
        </td>
    </tr>
    <tr>
        <td><label for="tx_apMaterno">Apellido materno</label></td>
        <td>
            <input type="text" name="tx_apMaterno" id="tx_apMaterno"  value='<?php echo $str_apMaterno ?>' size="30"  maxlength="30" />
        </td>
    </tr>
    <tr>
        <td><label for="tx_correo">Correo electronico</label></td>
        <td>
            <input type="text" name="tx_correo" id="tx_correo"  value='<?php echo $str_correo ?>' size="30"  maxlength="30" />
        </td>
    </tr>
    <tr>
        <td><label for="tx_username">Nombre de usuario</label></td>
        <td>
            <input type="text" name="tx_username" id="tx_username"  value='<?php echo $str_username ?>' size="30"  maxlength="30"  />
        </td>
    </tr>
    <tr>
        <td><label for="tx_password">Contrase&ntilde;a</label></td>
        <td>
            <input type="password" name="tx_password" id="tx_password"  value='<?php echo $str_password ?>'  size="30"  maxlength="30" />
        </td>
    </tr>
    <tr>
        <td><label for="tx_password2">Confirme la contrase&ntilde;a</label></td>
        <td>
            <input type="password" name="tx_password2" id="tx_password2"  value='<?php echo $str_password2 ?>'  size="30"  maxlength="30" />
        </td>
    </tr>
    <tr>
        <td>Tipo de usuario</td>
        <td>
            <input type="radio" name="rad_TipoUsuario" id="rad_TipoUsuario" value="2" /> Asociado 
			<input type="radio" name="rad_TipoUsuario" id="rad_TipoUsuario" value="1"  /> Administrador
        </td>
    </tr>
 
<tr>
 
    <td align="center" colspan="2">
        <br /><br />
        <input type="button" onClick="javascript: parent.parent.window.location.href='../index.php'" name="cancelar" value="Cancelar" >
        &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="registrarme" value="Registrar" >
    </td>
</tr>
 
</table>
</form>
</body>
</html>