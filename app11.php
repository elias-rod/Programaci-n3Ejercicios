<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function Potenciar($base){
	echo "Potencias del $base<br>";
	for ($i=1; $i < 5; $i++) {
		echo pow($base, $i) . '<br>';
	}
}
for ($i=1; $i < 5; $i++) {
	Potenciar($i);
}
 ?>
</body>
</html>