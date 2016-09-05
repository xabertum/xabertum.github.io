  
//Rollover sobre selector #bombilla  
  
$(document).ready(function() {
            $("#bombilla").mouseover(function() { 
               $(this).attr("src", "images/bombilla2.1.gif");
            });
			$("#bombilla").mouseout(function() {
               $(this).attr("src", "images/bombilla1.gif");
            });
        });
       
	   
//Mostrar y Ocultar formulario Login Asociados
    
var x;
x=$(document);
x.ready(mostrar);

function mostrar () {
	var x=$("#mostrar");
	x.click(muestrame);
}

function muestrame () {
	var x=$("#login");
	x.slideToggle("slow");	

}


//Erorres de alerta por no implementación

var x;
x=$(document)
x.ready(alerta)

function alerta () {
	var x=$(".enviar");
	x.click(alertImp);
}

function alertImp () {
	alert ("Función no Implementada")
}


// Calendario datepicker

var x;
x=$(document);
x.ready(inicio);

function inicio () {
	var x=$("#calendario");
	x.datepicker();
		
}

// Inicializar Nivo Slider

$(window).load(function() {
    $('#slider').nivoSlider();
});

// Inicializar jMenu

$(document).ready(function() {
	$(".jMenu").jMenu({
		openClick : false,
		ulWidth : 100,
		 TimeBeforeOpening : 100,
		TimeBeforeClosing : 100,
		animatedText : false,
		paddingLeft : 1,
		effects : {
			effectSpeedOpen : 150,
			effectSpeedClose : 150,
			effectTypeOpen : 'slide',
			effectTypeClose : 'slide',
			effectOpen : 'linear',
			effectClose : 'linear'
		}

	});
});



