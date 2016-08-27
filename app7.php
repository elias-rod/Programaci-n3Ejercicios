<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$array = array();
for ($i = 0, $numero = 1; $i < 10; $numero++) { 
	if($numero % 2 == 0) continue;
	$array[] = $numero;
	$i++;
}
echo 'Con for<br>';
for ($i = 0; $i < count($array); $i++)
	echo "$array[$i]<br>";
echo 'Con while<br>';
$i = 0;
while ($i < count($array)){
	echo "$array[$i]<br>";
	$i++;
}
echo 'Con foreach<br>';
foreach ($array as $value)
	echo "$value<br>";
?>
</body>
</html>