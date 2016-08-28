<html>
<head>
	<title></title>
</head>
<body>
<?php
echo 'Hoy es ' . date('d/m/y') . '<br>';
echo 'En ingles ' . date('l jS \of F Y') . '<br>Y estamos en: ';
$mes = date('m');
$dia = date('j');
switch($mes)
{
	case 1: case 2: echo 'Verano'; break;
	
	case 3:	echo $dia < 21?'Verano':'Otoño'; break;
	case 4: case 5: echo 'Otoño'; break;
	case 6:	echo $dia < 21?'Otoño':'Invierno'; break;
	case 7: case 8: echo 'Invierno'; break;
	case 9:	echo $dia < 21?'Invierno':'Primavera'; break;
	case 10: case 11: echo 'Primavera'; break;
	case 12: echo $dia < 21?'Primavera':'Verano'; break;
}
?>
</body>
</html>