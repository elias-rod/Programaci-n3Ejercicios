<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$lapicera = array('color' => 'azul', 'marca' => 'Parker', 'trazo' => 'grueso', 'precio'=> '$100');
		$lapicera2 = array('color' => 'rojo', 'marca' => 'Pelikan', 'trazo' => 'fino', 'precio'=> '$200');
		$lapicera3 = array('color' => 'blanco', 'marca' => 'PaperMate', 'trazo' => 'medio', 'precio'=> '$300');
		foreach ($lapicera as $value) {
			echo $value . '<br>';
		}
		echo '<br>';
		foreach ($lapicera2 as $value) {
			echo $value . '<br>';
		}
		echo '<br>';
		foreach ($lapicera3 as $value) {
			echo $value . '<br>';
		}
		echo '<br>';
	?>
</body>
</html>