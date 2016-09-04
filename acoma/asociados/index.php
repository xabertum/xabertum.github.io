<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=800, initial-scale=0.5">

<title>ACOMA | Asociación de Comerciantes de la Madera</title>
<link href="css/index.css" rel="stylesheet" type="text/css">
<link href="css/slider.css" rel="stylesheet" type="text/css">
<link href="css/gMaps.css" rel="stylesheet" type="text/css">
<link href="../usuarios/css/custom.alerts.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/main-script.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjbvEcNgDwieYGd5Pp4ZQWe0MYmOoUHhI"></script>
<script type="text/javascript" src="js/asociados_gmap2.js"></script>
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

<div id="dialogoverlay"></div>
<div id="dialogbox">
	<div>
		<div id="dialogoboxhead"></div>
		<div id="dialogoboxbody"></div>
		<div id="dialogoboxfoot"></div>
	</div>
</div>

<section id="section">

<!--ARTICLE Nº1-->

  <article>
    <div class="container1">
      <img src="images/Mystique-Forest-Landscape-1280-3.jpg" alt="fondo">
      <img src="images/introimg.png" alt="iconos" width="1282" height="687" usemap="#introMap" id="intro">
	  
	  <div id="icons">	
      <a href="#container8"><img id="maincontacto" src="images/maincontacto_blanco.png" width="58" height="43" alt="contacto"/></a>
      <a href="#divisor0"><img id="mainnosotros" src="images/mainnosotros_blanco.png" width="100" height="43" alt="sobrenosotros"/></a>
      <a href="#container6"><img id="mainasociados" src="images/mainasociados_blanco.png" width="66" height="41" alt="asociados"/></a>
      <a href="#divisor"><img id="mainactividades" src="images/mainactividades_blanco.png" width="76" height="49" alt="actividades"/></a>
      <a href="#container4"><img id="mainservicios" src="images/mainservicios_blanco.png" width="58" height="48" alt="servicios"/></a>
      <a href="cerrarSesion.php"><img id="mainlogin" class="mostrar0" src="images/mainlogout_blanco.png" width="86" height="51" alt="servicios"/></a>
      <a href="#divisor1"><img id="mainGaleria" src="images/gallery-iconBlanco.png" width="58" height="58" alt="servicios"/></a>
      <a href="#divisor1"><img id="mainNoticias" src="images/app_type_newspaper_512px_BLANCO.png" width="58" height="59" alt="servicios"/></a>
	  </div>
	  
      <map name="introMap">
        <area shape="circle" coords="853,232,19" href="#" alt="vimeo">
        <area shape="circle" coords="880,204,19" href="#" alt="skype">
        <area shape="circle" coords="880,153,19" href="#" alt="desconocido">
      	<area shape="circle" coords="831,153,19" href="#" alt="twitter">
      	<area shape="circle" coords="805,199,19" href="#" alt="googleplus">

        <area shape="circle" coords="779,153,19" href="#" alt="facebook">
      </map>
      <div id="hidden0">
     
     <center><form id="login" method="post" enctype="multipart/form-data">
     	<label>Introduce tus credenciales de acceso      </label>
        <input id="userbox" name="username" type="text" placeholder="Usuario">
        <input id="contraseñabox" name="password" type="password" placeholder="Contraseña">
        <input class="enviar" id="enviar3" type="button" name="enviar" value="Acceder"/>
	</form></center>

      </div>
     </div>
  </article>
  
  <!--ARTICLE Nº2-->
  <article id="sobrenosotros">

    <div class="container2">
        <img id="divisor0" src="images/line-shadow.png" width="1280" height="16" alt=""/>

      <p class="titulocont2"><span class="colortitulo">Solo </span>para<span class="colortitulo"> asociados...</span></p>
      <p class="texto1cont2">Vivamus bibendum <span class="colortexto">vehicula leo</span> sit amet sollicitudin. In hendrerit viverra lobortis.<br>
      In a nulla ut erat consectetur feugiat. Praesent pulvinar risus nec varius <span class="colortexto">consectetur</span>. Praesent ac eros velit.</p>
      <span id="texto2cont2">In id egestas ante, at tincidunt tellus.<br>
      Duis congue nisi ornare justo cursus convallis.<br>Suspendisse tellus arcu, <span class="colortexto"> aliquam volutpat</span><br>
      commodo id, sodales et ipsum.<br><br>
      Praesent faucibus cursus diam sed dapibus.<br>
      Ut sodales velit fringilla nisi vulputate condimentum.<br><span class="colortexto">Curabitur placerat </span>lacus justo, a imperdiet massa<br>
      suscipit eu. Nam sem turpis, volutpat vitae<br>arcu id, maximus lobortis eros.<br><br>
      Aenean lorem diam, pharetra ut eros ut, vulputate<br>placerat odio. Fusce lacus ex, <span class="colortexto">rutrum</span> eget nulla ac,<br>bibendum mollis libero. </span>
      
      <div id="content-slider"> 
        
        <!-- Contenedor del Slider -->
        
        <div id="slider"> 
          
          <!-- Mascara -->
          
          <div id="mask">
            <ul>
              <li class="firstanimation"> <img src="images/troncos1.jpg" alt="foto1"/> </li>
              <li class="secondanimation"> <img src="images/troncos2.jpg" alt="foto2"/> </li>
              <li class="thirdanimation"> <img src="images/troncos3.png" alt="foto3"/> </li>
              <li class="fourthanimation"> <img src="images/troncos4.jpg" alt="foto4"/> </li>
              <li class="fifthanimation"> <img src="images/troncos5.jpg" alt="foto5"/> </li>
            </ul>
          </div>
          <!-- Fin de Mascara --> 
        </div>
        <!-- Fin Contenedor Slider --> 
      </div>
      <a id="mostrar"><img src="images/Leermas.gif" alt="boton leer mas" width="152" height="52" id="leermas" title="Leer más sobre nosotros"/></a>
      
	  
	  <div id="hidden1">
<img src="images/soloAsociados.jpg" width="1280" height="690" alt=""/>
      </div>
    </div>
     <!--Fin de container nº2-->
  </article>
  <!--ARTICLE Nº2.1-->
  
  <article>
  	<div id="galerias">
    <img id="divisor1" src="images/line-shadow2.png" width="1280" height="16" alt=""/>
	
	<iframe id="ifrmGalerias" src="galerias.php"></iframe>
	
	</div>
  </article>
   
  
  
  
  <!--ARTICLE Nº3-->
  
  <article id="actividades">
    <div class="container3">
    <img id="divisor" src="images/line-shadow2.png" width="1280" height="16" alt=""/>
    <a href="#"><img src="images/scroller.gif" width="43" height="57" id="scrollerActividades" title="Inicio | Home" alt="home"/></a>

      <p class="titulocont3">Actividades</p>
      <p class="texto1cont3">Vivamus bibendum <span class="colortexto">vehicula leo</span> sit amet sollicitudin. In hendrerit viverra lobortis.<br>
        In a nulla ut erat consectetur feugiat. Praesent pulvinar risus nec varius <span class="colortexto">consectetur</span>. Praesent ac eros velit.</p>
      <p class="texto1cont3">Suspendisse mattis sollicitudin magna. Vivamus in imperdiet massa, et cursus sapien. Interdum et malesuada<br>
        fames ac ante ipsum primis in faucibus. Fusce eget lobortis leo, non rutrum quam. Cras ipsum dolor, pharetra id nibh nec,<br>
        <span class="colortexto">varius rhoncus</span> mi. Nullam lacinia nibh in felis ultrices elementum eget ac eros. Phasellus<br>
        quis arcu arcu. Phasellus id porttitor mauris. </p>

<center><img class="actividadesimg" src="images/actividades1.png" width="183" height="183" alt=""/>
<img class="actividadesimg" src="images/actividades2.png" width="184" height="184" alt=""/>
<img class="actividadesimg" src="images/actividades3.png" width="184" height="184" alt=""/>
<img class="actividadesimg" src="images/actividades4.png" width="184" height="184" alt=""/>
</center>

    </div>
  </article>
 
  <!-- ARTICLE Nº3.1-->
  
  <article>
  	<div id="noticias">
  
      <img id="divisorNoticias" src="images/line-shadow2.png" width="1280" height="16" alt=""/>
    <a href="#"><img src="images/scroller.gif" width="43" height="57" id="scrollerNoticias" title="Inicio | Home" alt="home"/></a>
	  
	  <iframe id="ifrmNoticias" src="noticias.php"></iframe>
  
  	</div>
  </article>
 
  
  <!--ARTICLE Nº4-->
  
  <article id="container4">
      <img id="divisor2" src="images/line-shadow.png" width="1280" height="16" alt=""/>

    <p class="titulocont4"><span class="colortitulo">Servicios</span></p>
    <p class="subtitulocont7">Vivamus bibendum <span class="colortexto">vehicula leo</span> sit amet sollicitudin. In hendrerit viverra lobortis.</p>
    <div class="servicios">
      <img src="images/servicesImg1.gif" alt="servicios" width="100" class="iconflip" id="icon1"/>
      <img src="images/servicesImg2.gif" alt="servicios" width="100" class="iconflip" id="icon2"/>
      <img src="images/servicesImg3.gif" alt="servicios" width="100" class="iconflip" id="icon3"/>
      <img src="images/servicesImg4.gif" alt="servicios" width="100" class="iconflip" id="icon4"/>
      <img src="images/servicesImg5.gif" alt="servicios" width="100" class="iconflip" id="icon5"/>
      <img src="images/servicesImg6.gif" alt="servicios" width="100" class="iconflip" id="icon6"/>


      <p id="texto1cont4">Vivamus <span class="colortexto">bibendum</span> vehicula<br>
        leo sit amet sollicitudin.<br>
        In hendrerit viverra lobortis.<br>
        In a nulla ut erat consectetur.</p>
      <p id="texto2cont4">Vivamus bibendum vehicula<br>
        leo sit amet <span class="colortexto">sollicitudin</span>.<br>
        In hendrerit viverra lobortis.<br>
        In a nulla ut erat consectetur.</p>
      <p id="texto3cont4">Vivamus bibendum vehicula<br>
        leo sit amet sollicitudin.<br>
        In hendrerit viverra <span class="colortexto">lobortis</span>.<br>
        In a nulla ut erat consectetur.</p>
      <p id="texto4cont4">Vivamus bibendum vehicula<br>
        leo sit amet sollicitudin.<br>
        In hendrerit viverra lobortis.<br>
        In a nulla ut erat <span class="colortexto">consectetur</span>.</p>
      <p id="texto5cont4">Vivamus bibendum vehicula<br>
        leo sit amet sollicitudin.<br>
        In hendrerit viverra lobortis.<br>
        In a<span class="colortexto">nulla</span> ut erat consectetur.</p>
      <p id="texto6cont4">Vivamus bibendum vehicula<br>
        leo sit <span class="colortexto">amet</span> sollicitudin.<br>
        In hendrerit viverra lobortis.<br>
        In a nulla ut erat consectetur.</p>
    </div>
    <a href="#"><img src="images/scroller.gif" width="43" height="57" id="scroller3" title="Inicio | Home" alt="home"/></a>
  </article>
  
  <!--ARTICLE Nº5-->
  
  <article id="container5">
      <img id="divisor3" src="images/line-shadow.png" width="1280" height="16" alt=""/>

   <img src="images/imgcontainer5.jpg" width="1280" height="720" alt="fondo"/>
   <img id="mapa" src="images/destamos_mapa.png" width="834" height="365" alt="Nuestra Situación"/>
   <img class="iconflip" id="iconcont5" src="images/localizacionicon.png" width="75" height="75" alt="localizacion"/>
    <p id="texto1cont5">Vivamus bibendum <span class="colortexto">vehicula<br>
    leo</span> sit amet sollicitudin.</p>
  </article>
 
 <!--ARTICLE Nº6--> 
 
  <article id="container6">
  <img id="divisor4" src="images/line-shadow2.png" width="1280" height="16" alt=""/>
  <p class="titulocont6"><span class="colortitulo">Asociados</span></p>
  <p class="subtitulo1cont6">Vivamus bibendum <span class="colortexto">vehicula leo</span> sit amet sollicitudin.In hendrerit viverra lobortis.</p>
    <img id="imgcont6" src="images/asociados.png" width="950" height="455" alt="asociados"/>
    <span id="textocont6">
      <p id="texto1cont6">Aliquam metus neque <br>
        <br>Vivamus bibendum <span class="colortexto">vehicula<br>
        leo</span> sit amet sollicitudin.<br>
        In hendrerit viverra lobortis.<br>
        In a nulla ut erat consectetur.</p>
      <p id="texto2cont6">Aliquam metus neque <br>
        <br>Vivamus bibendum vehicula<br>
        leo sit amet sollicitudin.<br>
        In hendrerit viverra lobortis.<br>
        In a <span class="colortexto">nulla</span> ut erat consectetur.</p>
      <p id="texto3cont6">Aliquam metus neque <br><br>
        Vivamus bibendum vehicula<br>
        leo sit amet <span class="colortexto">sollicitudin</span>.<br>
        In hendrerit viverra lobortis.<br>
        In a nulla ut erat consectetur.</p>
    </span>

    <a id="mostrar2" onclick="displayMap()"> <img id="leermas2" src="images/Leermas2.gif" width="152" height="52" alt="icono leer mas"/></a>
    <a href="#"><img src="images/scroller.gif" alt="home" width="43" height="57" id="scroller2" title="Inicio | Home"/></a> 
    
    <div id="hidden2">
		<div id="map_wrapper">
			<div id="map-canvas"></div>
		</div>
		<div id="localizacion_text">
			<img id="gMapsIcon" src="images/googlemaps.png" width="56" height="56" alt=""/>
			<p id="gMapsText">Haga click en una localización para ver más información.</p>
		</div>
	</div>

  </article>
  <!--ARTICLE Nº7-->
  
  <article id="container7">
  <img id="divisor5" src="images/line-shadow2.png" width="1280" height="16" alt=""/>
    <img src="images/newsletter.gif" alt="fondo" width="1280" height="564" usemap="#enviar" id="news"/>
    <map name="enviar">
      <area shape="rect" coords="559,400,716,453" href="#" alt="suscríbete">
    </map>
    
    <p class="titulocont7">Suscríbete a nuestra<span class="colortitulo"> Newsletter</span></p>
    <p class="texto1cont7">Vivamus bibendum <span class="colortexto">vehicula leo</span> sit amet sollicitudin. In hendrerit viverra lobortis.</p>
    
    <input id="email" name="news_email" type="email" size="30">
    <div><a id="newsletter_button"><img src="images/Enviar.gif" alt="enviar" width="158" height="53" id="enviar_newsletter" title="Enviar Comentario"/></a></div>

  </article>

<!-- ARTICLE Nº8-->

  <article id="container8">
    <img id="divisor6" src="images/line-shadow2.png" width="1280" height="16" alt=""/>
    <img id="contacto" src="images/contacto.gif" width="900" height="281" alt="contacto"/>
    <p class="titulocont8"><span class="colortitulo">Contacta</span> con nosotros</p>
    <p class="texto1cont8">Vivamus bibendum <span class="colortexto">vehicula leo</span> sit amet sollicitudin. In hendrerit viverra lobortis.</p>
    
    <div><input type="text" id="nombreform" size="30"></div>
    <div><input type="email" id="mailform" size="30"></div>
    <div><input type="text" id="asuntoform" size="30"></div>
    <div><textarea id="textform" rows="10" cols="37"  ></textarea></div>
    
    <div><a id='contacto_button'><img src="images/Enviar.gif" alt="enviar" width="158" height="53" id="enviar" title="Enviar Comentario"/></a></div>
    <a href="#"><img src="images/scroller.gif" alt="home" width="43" height="57" id="scroller" title="Inicio | Home"/></a>
    <a href="#"><img id="imgfooter" src="images/footer.gif" width="301" height="100" alt="footer"/></a>

   </article>
      
</section>




</body>
</html>
