<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
$filas = 5;
$columnas = 3;
echo '<table border ="1">';
for ($i=0; $i < $filas; $i++) {
	echo '<tr>';
	for ($j=0; $j < $columnas; $j++) { 
		echo '<td>' . $i . ', ' . $j . '</td>';
	}
	echo '</tr>';
}
echo '</table>';
 ?>
</body>
</html>