<style>
html {background-image: url("../../usuarios/images/background/1.4.1.jpg");}
</style>

<?php
 //conectar BD
    include("../../usuarios/conectar_bd.php");  
    conectar_bd();
	     
    $usr = $_POST['usuario'];
    $pw = $_POST['password'];
    
	//Obtengo la version encriptada del password
    $pw_enc = md5($pw);
     
    $sql = "SELECT * FROM tbl_users
            INNER JOIN ctg_tiposusuario
            ON tbl_users.id_TipoUsuario = ctg_tiposusuario.id_TipoUsuario
            WHERE tx_username = '".$usr."'
            AND tx_password = '".$pw_enc."' ";  
    $result = mysql_query($sql,$conexio); 
 
    $uid = "";
     
    //Si existe al menos una fila
	
	if ($fila = mysql_fetch_array ($result)) { 
	
    if( $fila['id_TipoUsuario'] == 1 )
    {       
        //Obtener el Id del usuario en la BD        
        $uid = $fila['id_usuario'];
        //Iniciar una sesion de PHP
        session_start();
        //Crear una variable para indicar que se ha autenticado
        $_SESSION['autenticado'] = 'SI';
        //Crear una variable para guardar el ID del usuario para tenerlo siempre disponible
        $_SESSION['uid'] = $uid;
        //CODIGO DE SESION
         
        //Crear un formulario para redireccionar al usuario y enviar oculto su Id 
?>
        <form name="formulario" method="post" action="../../administrador/index.php">
            <input type="hidden" name="idUsr" value='<?php echo $uid ?>' />
        </form>
<?php
    }  
    elseif ( $fila['id_TipoUsuario'] == 2 ) {
       
	    //Obtener el Id del usuario en la BD        
        $uid = $fila['id_usuario'];
        //Iniciar una sesion de PHP
        session_start();
        //Crear una variable para indicar que se ha autenticado
        $_SESSION['autenticado'] = 'SI';
        //Crear una variable para guardar el ID del usuario para tenerlo siempre disponible
        $_SESSION['uid'] = $uid;
        //CODIGO DE SESION
?>
        <form name="formulario" method="post" action="../../asociados/index.php">
            <input type="hidden" name="idUsr" value='<?php echo $uid ?>' />
        </form>
<?php
	}} 
	else { 
?> 
        <form name="formulario" method="post" action="../../index.php">
            <input type="hidden" name="msg_error" value="1">
        </form>
<?php
	}
?>
                     
<script type="text/javascript"> 
    //Redireccionar con el formulario creado
    document.formulario.submit();
</script>

