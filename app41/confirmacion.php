<?php
$directorio = 'uploads/' . $_FILES['archivo']['name'];
$extension = pathinfo($_FILES['archivo']['name'], PATHINFO_EXTENSION);
$tamaño = $_FILES['archivo']['size'];
if(($extension == 'doc' || $extension == 'docx') && $tamaño <= 60000) {
    move_uploaded_file($_FILES['archivo']['tmp_name'], $directorio);
    echo 'Exito';
}
elseif (($extension == 'jog' || $extension == 'jpeg' || $extension == 'gif') && $tamaño <= 300000) {
    move_uploaded_file($_FILES['archivo']['tmp_name'], $directorio);
    echo 'Exito';
}
elseif ($tamaño <= 500000) {
	move_uploaded_file($_FILES['archivo']['tmp_name'], $directorio);
    echo 'Exito';
}
else{
	echo 'Error, el archivo excede el tamaño máximo permitido.';
}