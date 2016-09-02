<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
<?php 
require 'pasajero.php';
require 'vuelo.php';

$p1 = new Pasajero('apellido1', 'nombre1', 'dni1', true);
$p2 = new Pasajero('apellido2', 'nombre2', 'dni2', false);
$p3 = new Pasajero('apellido3', 'nombre3', 'dni3', true);
$p4 = new Pasajero('apellido4', 'nombre4', 'dni4', false);
$p5 = new Pasajero('apellido5', 'nombre5', 'dni5', false);
$p1 = new Pasajero('apellido1', 'nombre1', 'dni1', true);
$v1 = new Vuelo('Aerolineas', 10.5);
$v2 = new Vuelo('Lan', 20.5, 20);
$v3 = new Vuelo('Gol', 30.5, 30, new DateTime(), array($p1, $p2, $p3));
$v1->MostrarVuelo();
$v2->MostrarVuelo();
$v3->MostrarVuelo();
$v3->AgregarPasajero($p4);
$v3->MostrarVuelo();
echo 'Se recaudó: ' . Vuelo::Add($v2, $v3) . '<br>';
Vuelo::Remove($v3, $p4);
$v3->MostrarVuelo();
 ?>
</body>
</html>