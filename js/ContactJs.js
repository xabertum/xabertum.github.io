// JavaScript Document

$(document).ready(function (){
	
	$("body").click(function(){
	
	if (this.click()) {
		
	$('.modalDialog', window.parent.document).css({'opacity': '0', 'pointer-events': 'none'});
	}

 	
	
	else if ($(".contact").click()) {
	
	$('.modalDialog', window.parent.document).css({'opacity': '1', 'pointer-events': 'auto'});
	

 	}

	});


});