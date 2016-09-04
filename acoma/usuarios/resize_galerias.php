<?php

header ("Content-Type: image/jpeg");

$ruta = $_GET['r'];
$tamaño = isset($_GET['w']) ? $_GET['w']: 200;


$original = imagecreatefromjpeg ( '../administrador/images/galerias/'.$ruta);

$cw = $tamaño;
$ch = $tamaño;

$ancho = imagesx($original);
$alto = imagesy($original);

if ( $ancho > $alto ) {
	$ow = $alto;
	$oh = $alto;
	
	$owf = ($ancho - $alto) /2;
	$ohf = 0;
	
} else {
	$ow = $ancho;
	$oh = $ancho;
	$ohf = ($alto - $ancho) /2;
	$owf = 0;
}

$copia = imagecreatetruecolor ($cw, $ch);

imagecopyresampled ($copia, $original, 0,0, $owf,$ohf, $cw,$ch, $ow,$oh); 

imagejpeg ( $copia, null, 100 ) ;

?>