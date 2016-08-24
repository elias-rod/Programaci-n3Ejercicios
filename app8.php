<html>
<head>
	<title></title>
</head>
<body>
<?php
$v = array(1 => 90, 30 => 7, "e" => 99, "hola" => "mundo");
foreach ($v as $value) {
	echo $value . '<br>';
}
echo var_dump($v);
?>
</body>
</html>