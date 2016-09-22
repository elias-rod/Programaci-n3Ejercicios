<html>
<head>
	<title></title>
</head>
<body>
<?php
	$archivo = fopen('palabras.txt', 'r');
	$array = array();
	while(!(feof($archivo))){
		$parrafo = fgets($archivo);
		$array = array_merge($array, explode(" ", $parrafo));//Separa un string en substrings mediante el delimitador
	}
	$cantidades = array($uno = 0, $dos = 0, $tres = 0, $cuatro = 0, $masDeCuatro = 0);
	foreach ($array as $value) {
		switch (strlen($value)) {
			case 1:
				$cantidades[0]++;
				break;
			case 2:
				$cantidades[1]++;
				break;
			case 3:
				$cantidades[2]++;
				break;
			case 4:
				$cantidades[3]++;
				break;
			default:
				$cantidades[4]++;
				break;
		}
	}
	echo '<table border ="1">';
	for ($i=0; $i < count($cantidades) - 1; $i++) {
		echo '<tr><td>' . ($i+1) .'</td><td>' . $cantidades[$i] . '</td></tr>';
	}
	echo '<tr><td>5 o más</td><td>' . $cantidades[4] . '</td></tr>';
	echo '</table>';
?>
</body>
</html>