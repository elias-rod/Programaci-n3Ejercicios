<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
	<?php
		$a = rand(0, 100);
		$b = rand(0, 100);
		$c = rand(0, 100);
		echo $a . '<br>';
		echo $b . '<br>';
		echo $c . '<br>';
		$suma = $a + $b + $c;
		$minimo = min($a, $b, $c);
		$maximo = max($a, $b, $c);
		$medio = $suma - $minimo - $maximo;
		$medio == $minimo || $medio == $maximo ? print 'No hay valor del medio' : print $medio;
	?>
</body>
</html>