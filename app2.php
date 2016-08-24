<html>
<head>
	<title></title>
</head>
<body>
<?php
echo 'Hoy es ' . date('l jS \of F Y h:i:s A') . '<br>';
$mes = date('m');
$dia = date('j');
switch($mes)
{
	case 1: case 2: echo 'Verano'; break;
	case 4: case 5: echo 'Otoño'; break;
}
?>
</body>
</html>