// JavaScript Document

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
		document.getElementById('dialogoboxhead').style.backgroundImage = "url('images/alertIcon.png')";

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
		document.getElementById('dialogoboxfoot').innerHTML = '<button onclick="Alert2.ok()">OK</button>';
		document.getElementById('dialogoboxhead').style.backgroundImage = "url('images/OK_icon24.png')";
	}	
	this.ok = function (){
		document.getElementById('dialogbox').style.display = "none";
		document.getElementById('dialogoverlay').style.display = "none";
	}
return false;
}
