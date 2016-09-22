<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
	<?php
		$imagenes = glob('fotos/*.jpg');
		$contador = 0;

		for ($i=0; $i < count($imagenes); $i++) { 
			if ($i % 4 == 0) {
				echo '</tr><tr>';
			}
			echo '<td><img src="' . $imagenes[$i]. '"</td>';
		}/*
		foreach ($imagenes as $value) {
			if ($contador % 4 == 0) {
				echo '</tr><tr>';
			}
			echo '<td><img src="' . $value. '"</td>';
			$contador++;
		}*/
	 ?>
	</tr>
</table>
</body>
</html>