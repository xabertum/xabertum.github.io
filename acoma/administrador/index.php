<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=800, initial-scale=0.5">

<title>ACOMA | Asociación de Comerciantes de la Madera</title>

<link href="css/index.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/main-script.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58943080-3', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>

<section id="section">

<!--ARTICLE Nº1-->

  <article id="article1">

    <div class="container1">
      <img src="images/Mystique-Forest-Landscape-1280-4.jpg" alt="fondo">
      <img src="images/introimg2.png" alt="iconos" width="1282" height="687" usemap="#introMap" id="intro">

      <a href="cerrarSesion.php"><img id="mainlogout" src="images/mainlogout_blanco.png" width="86" height="51" alt="asociados"/></a>
      <a href="#divisor"><img id="mainasociados" src="images/mainasociados_blanco.png" width="66" height="41" alt="asociados"/></a>
      <a href="#divisor2"><img id="mainactividades" src="images/mainactividades_blanco.png" width="76" height="49" alt="actividades"/></a>
      <a href="#divisor0"><img id="mainservicios" src="images/mainservicios_blanco.png" width="58" height="48" alt="servicios"/></a>
      <a href="#divisor3"><img id="maincontacto" src="images/maincontacto_blanco.png" width="58" height="43" alt="servicios"/></a>

     
      <div id="hidden0">
     
     <center><form id="login" method="POST" action="controlUsuarios/validar_usuarioAdmin.php">
     	<label>Introduce tus credenciales de acceso</label>
        <input id="userbox" name="usuario" type="text" placeholder="Usuario">
        <input id="contraseñabox" name="password" type="password" placeholder="Contraseña">
        <input class="enviar" id="enviar3" type="submit" name="enviar" value="Acceder"/>
	</form></center>
      </div>

     </div>
  </article>

<div id="articleMain">
  
  <!--ARTICLE Nº2-->
  <article id="adminGaleria">

    <div class="container2">
        <img id="divisor0" src="images/line-shadow.png" width="1280" height="16" alt=""/>

	<iframe id="ifrmCont2" src="controlGalerias/administrador.php"></iframe>

	</div>
     <!--Fin de container nº2-->
  </article>
  
  <!--ARTICLE Nº3-->
  
  <article id="actividades">
    <div class="container3">
		<img id="divisor" src="images/line-shadow2.png" width="1280" height="16" alt=""/>
		
		<iframe id="ifrmCont3" src="controlUsuarios/administrador_usuarios.php"></iframe>
	
	</div>

  </article>
  
  <!--ARTICLE Nº4-->
  
  <article id="noticias">
  	<div class="container4">
      <img id="divisor2" src="images/line-shadow.png" width="1280" height="16" alt=""/>
	  
		<iframe id="ifrmCont4" src="controlNoticias/administrador_noticias.php"></iframe>
	  
  	</div>
  </article>

<!--ARTICLE Nª5 -->
  
  <article id="ultimasNoticias">
  	<div class="container5">
      <img id="divisor2" src="images/line-shadow.png" width="1280" height="16" alt=""/>
	  
		<iframe id="ifrmCont4" src="controlNoticias/administrador_ultimas_noticias.php"></iframe>
	  
  	</div>
  </article>

<!--ARTICLE Nª6 -->
  
  <article id="newsletter">
  	<div class="container6">
      <img id="divisor3" src="images/line-shadow.png" width="1280" height="16" alt=""/>
	  
		<iframe id="ifrmCont4" src="controlNewsletter/administrador_newsletter.php"></iframe>
	  
  	</div>
  </article>
  
  
</div>
      
</section>
</body>
</html>
