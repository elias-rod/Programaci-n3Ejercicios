<?php
class Operario
{
	//CAMPOS
	private $_apellido;
	private $_legajo;
	private $_nombre;
	private $_salario;
	//MÉTODOS
	function __construct($legajo, $apellido, $nombre, $salario)
	{
		$this->_legajo = $legajo;
		$this->_apellido = $apellido;
		$this->_nombre = $nombre;
		$this->_salario = $salario;
	}
	public function Equals($op1, $op2)
	{
		if($op1->_apellido == $op2->_apellido &&
			$op1->_nombre == $op2->_nombre &&
			$op1->_legajo == $op2->_legajo)
			return true;
		else
			return false;
	}
	public function GetNombreApellido()
	{
		return $this->_nombre . ', ' . $this->_apellido;
	}
	public function GetSalario()
	{
		return $this->_salario;
	}
	public function Mostrar()
	{
		return 'Legajo: ' . $this->_legajo . '<br>Nombre y apellido: ' . $this->GetNombreApellido() . '<br>Salario: ' . $this->GetSalario() . '<br>';
	}
	public static function Mostrar2($op1)
	{
		return $op1->Mostrar();
	}
	public function SetAumentarSalario($aumento)
	{
		$this->_salario = $this->_salario * (1 + ($aumento / 100));
	}
}