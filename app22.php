<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>

<?php 
define("FILA", 5);
define("COLUMNA", 3);
echo '<table border ="1">';
for ($i=0; $i < FILA; $i++) {
	if($i % 2 == 0)
	{
		echo '<tr style="background-color:#FFFFFF">';
	}
	else
	{
		echo '<tr style="background-color:#BDBDBD">';
	}
	for ($j=0; $j < COLUMNA; $j++) { 
		echo '<td>' . $i . ', ' . $j . '</td>';
	}
	echo '</tr>';
}
echo '</table>';
 ?>

</body>
</html>