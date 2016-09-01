<?php
class Auto
{
	//CAMPOS
	private $_color;
	private $_precio;
	private $_marca;
	private $_fecha;

	//MÉTODOS
	function __construct($marca, $color, $precio = 'sin determinar', $fecha = 'sin determinar')
	{
		$this->_color = $color;
		$this->_precio = $precio;
		$this->_marca = $marca;
		$this->_fecha = $fecha;
	}
	public function AgregarImpuestos($double)
	{
		$this->_precio += $double;
	}
	public static function MostrarAuto($auto)
	{
		echo "El auto es de marca: $auto->_marca<br>";
		echo "El auto es de color: $auto->_color<br>";
		echo "El auto sale: $auto->_precio<br>";
		echo is_string($auto->_fecha) ? 'El auto es del año: ' . $auto->_fecha : 'El auto es del año: ' . $auto->_fecha->format('Y') . '<br>';
	}
	public static function Equals($auto1, $auto2)
	{
		return $auto1->_marca == $auto2->_marca? true : false;
	}
	public static function Add($auto1, $auto2)
	{
		if(Auto::Equals($auto1, $auto2) && $auto1->_color == $auto2->_color)
			return $auto1->_precio + $auto2->_precio;
		else
			echo 'Los autos son distintos por lo que no se pueden sumar.<br>';
	}
}