<?php 
abstract public class FiguraGeometrica extends AnotherClass
{
	protected $_color;
	protected $_perimetro;
	protected $_superficie;

	function __construct($valor)
	{
		$this->_color = $valor;
	}
	function CalcularDatos()
	{

	}
	function Dibujar()
	{

	}
	function GetColor()
	{
		return $this->_color;
	}
	function SetColor($valor)
	{
		$this->_color = $valor;
	}
	function ToString()
	{

	}
}
?>