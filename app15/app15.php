<html>
<head>
	<title></title>
</head>
<body>
	<?php
		require 'FiguraGeometrica.php';
		require 'Rectangulo.php';
		require 'Triangulo.php';
		$miRectangulo = new Rectangulo(4, 15);
		$miRectangulo->SetColor('red');
		$miRectangulo->ToString();
		$miTriangulo = new Triangulo(5, 3);
		$miTriangulo->SetColor('blue');
		$miTriangulo->ToString();
	?>
</body>
</html>