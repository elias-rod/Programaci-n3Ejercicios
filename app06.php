<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
for ($i=0; $i < 4; $i++)
	$array[$i] = rand(0, 18);
$promedio = array_sum($array) / count($array);
if($promedio > 6) echo 'El promedio es mayor que 6';
elseif($promedio < 6) echo 'El promedio es menor que 6';
else echo 'El promedio es igual que 6';
var_dump($array);
 ?>
</body>
</html>