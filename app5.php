<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$num = rand(20, 60);
function MostrarUnidad($unidad){
	switch ($unidad) {
		case 1:	echo 'uno'; break;
		case 2:	echo 'dos'; break;
		case 3:	echo 'tres'; break;
		case 4:	echo 'cuatro'; break;
		case 5:	echo 'cinco'; break;
		case 6:	echo 'seis'; break;
		case 7:	echo 'siete'; break;
		case 8:	echo 'ocho'; break;
		case 9:	echo 'nueve'; break;
	}
}
switch ($num) {
	case $num == 20: echo 'Veinte'; break;
	case $num < 30:	echo 'Veinti'; MostrarUnidad($num % 10); break;
	case $num == 30: echo 'Treinta'; break;
	case $num < 40:	echo 'Treinta y '; MostrarUnidad($num % 10); break;
	case $num == 40: echo 'Cuarenta'; break;
	case $num < 50:	echo 'Cuarenta y '; MostrarUnidad($num % 10); break;
	case $num == 50: echo 'Cincuenta'; break;
	case $num < 60:	echo 'Cincuenta y '; MostrarUnidad($num % 10); break;
	case $num == 60: echo 'Sesenta'; break;
}
 ?>
</body>
</html>