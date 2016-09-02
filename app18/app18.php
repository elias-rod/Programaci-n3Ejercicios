<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
require 'auto.php';
require 'garage.php';

$garage = new Garage('Estacione S.A.');
$miA1 = new Auto('Ford', 'negro');
$miA2 = new Auto('Ford', 'blanco');
$miA3 = new Auto('Peugeot', 'verde', 3000);
$miA4 = new Auto('Nissan', 'verde', 4000);
$miA5 = new Auto('Fiat', 'azul', 5000, new DateTime());

$garage->Add($miA1);
$garage->Add($miA2);
$garage->Add($miA3);
$garage->Add($miA4);
$garage->Add($miA5);
$garage->Add($miA1);

$garage->MostrarGarage();

$garage->Remove($miA1);

$garage->MostrarGarage();
?>
</body>
</html>