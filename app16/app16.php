<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	require 'Punto.php';
	require 'Rectangulo.php';
	$punto1 = new Punto(0, 0);
	$punto3 = new Punto(300, 305);
	$miRectangulo = new Rectangulo($punto1, $punto3);
	$miRectangulo->Dibujar();
?>
<img src="rectangulo.png" border=0>
</body>
</html>