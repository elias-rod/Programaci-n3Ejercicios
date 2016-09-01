<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
require 'auto.php';
$miA1 = new Auto('Ford', 'negro');
$miA2 = new Auto('Ford', 'blanco');
$miA3 = new Auto('Peugeot', 'verde', 3000);
$miA4 = new Auto('Nissan', 'verde', 4000);
$miA5 = new Auto('Fiat', 'azul', 5000, new DateTime());
$miA3->AgregarImpuestos(1500);
$miA4->AgregarImpuestos(1500);
$miA5->AgregarImpuestos(1500);
echo (Auto::Add($miA1, $miA2)) . '<br>';
echo 'El primer y el segundo auto son: ' . (Auto::Equals($miA1, $miA2) ? 'iguales.<br>' : 'distintos.<br>');
echo 'El primer y el quinto auto son: ' . (Auto::Equals($miA1, $miA5) ? 'iguales.<br>' : 'distintos.<br>');
echo '<br>';
for ($i=1; $i < 6; $i++) { 
	$i % 2 !== 0 ? Auto::MostrarAuto(${'miA' . $i}) : print 'Auto impar';
	echo '<br><br>';
}
?>
</body>
</html>