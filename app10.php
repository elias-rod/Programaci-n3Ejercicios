<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$lapicera = array('color' => 'azul', 'marca' => 'Parker', 'trazo' => 'grueso', 'precio'=> '$100');
	$lapicera2 = array('color' => 'rojo', 'marca' => 'Pelikan', 'trazo' => 'fino', 'precio'=> '$200');
	$lapicera3 = array('color' => 'blanco', 'marca' => 'PaperMate', 'trazo' => 'medio', 'precio'=> '$300');
	$arrayIndex = array($lapicera, $lapicera2, $lapicera3);

	foreach ($arrayIndex as $value) {
		echo "{$value['color']}<br>";
		echo "{$value['marca']}<br>";
		echo "{$value['trazo']}<br>";
		echo "{$value['precio']}<br>";
	}
	?>
	
</body>
</html>