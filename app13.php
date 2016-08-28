<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
function Invertir($palabra, $max){
	if(strlen($palabra) <= $max)
		echo 'La palabra está dentro del límite máximo permitido.<br>';
	else{
		echo 'La palabra excede el máximo permitido.<br>';
		return;
	}
	$array = array('Recuperatorio', 'Parcial', 'Programación');
	if(in_array($palabra, $array)){
		echo 'Palabra invertida: ', strrev($palabra);
		return true;
	}
	else return false;
}
echo 'Invertiendo \'Recuperatorio\'...<br>';
Invertir('Recuperatorio', 15);
?>
</body>
</html>