
$('document').ready(function(){
    $("#contacto_button").click(function() {
 
        var nombre = $("#nombreform").val();
            emailForm = $("#mailform").val();
            validacion_email = /^(.+\@.+\..+)$/;
            asunto = $("#asuntoform").val();
            mensaje = $("#textform").val();
 
        if(nombre =="") {
			Alert.render ("Campo Nombre vacio. Por favor, introduzca un Nombre.");
            nombre.focus();
            return false;
        }else if(emailForm == "") {
			Alert.render ("Campo email vacio. Introduzca una direccion de correo electronico.");
            emailForm.focus();
            return false;
		}else if (!validacion_email.test(emailForm)) {
			Alert.render ("Campo email no válido. Introduzca una direccion de correo electronico válida.");
            emailForm.focus();
            return false;
		}else if(asunto == "") {
			Alert.render ("Campo Asunto vacio. Por favor, introduzca un Asunto.");
		    asunto.focus();
            return false;
        }else if(mensaje == "" ){
			Alert.render ("Campo Comentario vacio. Por favor, introduzca un Comentario.");
            mensaje.focus();
            return false;
        }else {
			jQuery.post( "usuarios/enviarContactoForm.php", {
				nombre:nombre,
				email:emailForm,
				asunto:asunto,
				mensaje:mensaje },
				function() {
					Alert2.render("¡Formulario enviado con éxito! Gracias por tu comentario.");
					limpiarCampos2();
			});
			return false;
        }
	
    });
});

function limpiarCampos2 () {
	document.getElementById('mailForm').value = '';	
}


//Enviar correo para la newsletter a la base de datos

$('document').ready(function(){
	$('#newsletter_button').click(function(){
		if($('#email').val()=="") {
			Alert.render ("Campo email vacio. Introduzca una direccion de correo electronico.");
			return false;
		}
		else {
			var email = $('#email').val();
		}
		
		jQuery.post("usuarios/newsletter.php", {
			name:email
		}, function () {
			
			Alert2.render("E-mail guardado con éxito en la Base de Datos.");
			limpiarCampos();
					
		});
	});
});

function limpiarCampos () {
	document.getElementById('email').value = '';	
}



//Funciones para mostrar Alerts personalizados 

var Alert = new customAlert();
var Alert2 = new customAlert2();

function customAlert () {
	this.render = function (dialog){
		var winW = window.innerWidth;
		var winH = window.innerHeight;
		var dialogoverlay = document.getElementById('dialogoverlay');
		var dialogbox = document.getElementById('dialogbox');
		dialogoverlay.style.display = "block";
		dialogoverlay.style.height = winH+"px";
		dialogbox.style.left = (winW/2) - (400 * .5)+"px";
		dialogbox.style.top = (winH/2) - (170 * .5)+"px";
		dialogbox.style.display = "block";
		document.getElementById('dialogoboxhead').innerHTML = "Seguridad";
		document.getElementById('dialogoboxbody').innerHTML = dialog;
		document.getElementById('dialogoboxfoot').innerHTML = '<button onclick="Alert.ok()">OK</button>';
		document.getElementById('dialogoboxhead').style.backgroundImage = "url('usuarios/images/alertIcon.png')";

	}	
	this.ok = function (){
		document.getElementById('dialogbox').style.display = "none";
		document.getElementById('dialogoverlay').style.display = "none";
	}
	
}

function customAlert2 () {
	this.render = function (dialog){
		var winW = window.innerWidth;
		var winH = window.innerHeight;
		var dialogoverlay = document.getElementById('dialogoverlay');
		var dialogbox = document.getElementById('dialogbox');
		dialogoverlay.style.display = "block";
		dialogoverlay.style.height = winH+"px";
		dialogbox.style.left = (winW/2) - (400 * .5)+"px";
		dialogbox.style.top = (winH/2) - (170 * .5)+"px";
		dialogbox.style.display = "block";
		document.getElementById('dialogoboxhead').innerHTML = "Bienvenido";
		document.getElementById('dialogoboxbody').innerHTML = dialog;
		document.getElementById('dialogoboxfoot').innerHTML = '<button onclick="Alert.ok()">OK</button>';
		document.getElementById('dialogoboxhead').style.backgroundImage = "url('usuarios/images/OK_icon24.png')";

	}	
	this.ok = function (){
		document.getElementById('dialogbox').style.display = "none";
		document.getElementById('dialogoverlay').style.display = "none";
	}
	
}


//Mostrar y ocultar elemento div con display:none

var x;
x=$(document);
x.ready(mostrar);

function mostrar () {
	var x=$("#mostrar");
	x.click(muestrame);
}

function muestrame () {
	var x=$("#hidden1");
	x.slideToggle("slow");	
}


//Mostrar y Ocultar formulario Login 

var z;
z=$(document);
z.ready(mostrar0);

function mostrar0 () {
	var z=$(".mostrar0");
	z.click(muestrame0);	
}

function muestrame0 () {
	var z=$("#hidden0");
	z.slideToggle("slow");
}

//Rollover sobre iconos main 
  
$(document).ready(function() {
	
	         $("#mainNoticias").mouseover(function() { 
               $(this).attr("src", "usuarios/images/app_type_newspaper_512px_COLOR.png");
            });

            $("#mainNoticias").mouseout(function() { 
               $(this).attr("src", "usuarios/images/app_type_newspaper_512px_BLANCO.png");
            });


            $("#maincontacto").mouseover(function() { 
               $(this).attr("src", "usuarios/images/maincontacto_color.png");
            });
			$("#maincontacto").mouseout(function() {
               $(this).attr("src", "usuarios/images/maincontacto_blanco.png");
            });
			
			$("#mainnosotros").mouseover(function() { 
               $(this).attr("src", "usuarios/images/mainnosotros_color.png");
            });
			$("#mainnosotros").mouseout(function() {
               $(this).attr("src", "usuarios/images/mainnosotros_blanco.png");
            });

			$("#mainasociados").mouseover(function() { 
               $(this).attr("src", "usuarios/images/mainasociados_color.png");
            });
			$("#mainasociados").mouseout(function() {
               $(this).attr("src", "usuarios/images/mainasociados_blanco.png");
            });
			
			$("#mainactividades").mouseover(function() { 
               $(this).attr("src", "usuarios/images/mainactividades_color.png");
            });
			$("#mainactividades").mouseout(function() {
               $(this).attr("src", "usuarios/images/mainactividades_blanco.png");
            });
			
			$("#mainservicios").mouseover(function() { 
               $(this).attr("src", "usuarios/images/mainservicios_color.png");
            });
			$("#mainservicios").mouseout(function() {
               $(this).attr("src", "usuarios/images/mainservicios_blanco.png");
			});
			
			$("#mainlogin").mouseover(function() { 
               $(this).attr("src", "usuarios/images/login512Color3.png");
            });
			$("#mainlogin").mouseout(function() {
               $(this).attr("src", "usuarios/images/login512Blanco3.png");
			});

			
			
			


$(".iconflip").animate({
  transform: 'rotate(135deg)'
});

        });
