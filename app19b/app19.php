<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
require 'fabrica.php';
require 'operario.php';
$o1 = new Operario(100, 'Rodriguez', 'Elias', 1000);
$o2 = new Operario(101, 'Sapia', 'Tomas', 2000);
$o3 = new Operario(102, 'Pinchuk', 'Mariana', 3000);
$f1 = new Fabrica('CocaCola');
$f1->Add($o1);
$f1->Add($o2);
$f1->Add($o3);
$f1->Mostrar();
$f1->Remove($o1);
$f1->Mostrar();
$o2->SetAumentarSalario(25);
$f1->Add($o1);
$f1->Mostrar();
?>
</body>
</html>