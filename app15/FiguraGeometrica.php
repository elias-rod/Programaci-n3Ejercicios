<?php 
abstract class FiguraGeometrica
{
	public function __construct()
	{
		
	}
	//CAMPOS
	protected $_color;
	protected $_perimetro;
	protected $_superficie;
	//METODOS
	abstract protected function CalcularDatos();
	abstract public function Dibujar();
	public function GetColor()
	{
		return $this->_color;
	}
	public function SetColor($valor)
	{
		$this->_color = $valor;
	}
	public function ToString()
	{
	}
}