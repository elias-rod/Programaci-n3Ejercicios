<?php
if (isset($_POST['medida1']) && isset($_POST['medida2'])) {
	if($_POST['eleccion'] == 'perimetro'){
		echo '<p>El perímetro es ' . ($_POST['medida1'] * 2 + $_POST['medida2'] * 2) . '</p>';
	}
	else{
		echo '<p>La superficie es ' . ($_POST['medida1'] * $_POST['medida2']) . '</p>';
	}
}

echo '<a href='. $_SERVER['HTTP_REFERER'] . '>Volver a la página anterior.</a>';