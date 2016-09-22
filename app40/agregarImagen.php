<?php
$directorio = 'fotos/' . $_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'], $directorio);
header('Location: app40.php');