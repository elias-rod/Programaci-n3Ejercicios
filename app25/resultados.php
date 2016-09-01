<?php
if (isset($_POST['medida1']) && isset($_POST['medida2'])) {
	echo '<p>El perímetro es ' . ($_POST['medida1'] * 2 + $_POST['medida2'] * 2) . '</p>';
	echo '<p>La superficie es ' . ($_POST['medida1'] * $_POST['medida2']) . '</p>';
}
echo '<a href='. $_SERVER['HTTP_REFERER'] . '>Volver a la página anterior.</a>';