

    
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


var y;
y=$(document);
y.ready(mostrar2);

function mostrar2 () {
	var y=$("#mostrar2");
	y.click(muestrame2);	
}

function muestrame2 () {
	var y=$("#hidden2");
	y.slideToggle("slow");
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
            $("#maincontacto").mouseover(function() { 
               $(this).attr("src", "images/maincontacto_color.png");
            });
			$("#maincontacto").mouseout(function() {
               $(this).attr("src", "images/maincontacto_blanco.png");
            });
			
			$("#mainnosotros").mouseover(function() { 
               $(this).attr("src", "images/mainnosotros_color.png");
            });
			$("#mainnosotros").mouseout(function() {
               $(this).attr("src", "images/mainnosotros_blanco.png");
            });

			$("#mainasociados").mouseover(function() { 
               $(this).attr("src", "images/mainasociados_color.png");
            });
			$("#mainasociados").mouseout(function() {
               $(this).attr("src", "images/mainasociados_blanco.png");
            });
			
			$("#mainactividades").mouseover(function() { 
               $(this).attr("src", "images/mainactividades_color.png");
            });
			$("#mainactividades").mouseout(function() {
               $(this).attr("src", "images/mainactividades_blanco.png");
            });
			
			$("#mainservicios").mouseover(function() { 
               $(this).attr("src", "images/mainservicios_color.png");
            });
			$("#mainservicios").mouseout(function() {
               $(this).attr("src", "images/mainservicios_blanco.png");
            
			$("#mainlogin").mouseover(function() { 
               $(this).attr("src", "images/login512Color3.png");
            });
			$("#mainlogin").mouseout(function() {
               $(this).attr("src", "images/login512Blanco3.png");

			
			});

			});
			
			
			


$(".iconflip").animate({
  transform: 'rotate(135deg)'
});

        });
