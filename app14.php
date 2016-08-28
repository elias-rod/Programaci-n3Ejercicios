<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
function esPar($entero){
	if($entero % 2 == 0) return true;
	else return false;
}
function esImpar($entero){
	return !esPar($entero);
}
echo 'El numero 3 es: ', esPar(3)? 'par' : 'impar';
?>
</body>
</html>