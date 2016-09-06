<?php
class Fabrica
{
	//CAMPOS
	private $_cantMaxOperarios;
	private $_operarios;
	private $_razonSocial;
	//MÉTODOS
	function __construct($rs)
	{
		$this->_razonSocial = $rs;
		$this->_cantMaxOperarios = 5;
		$this->_operarios = [];
	}
	public function Add($op)
	{
		if(count($this->_operarios) < $this->_cantMaxOperarios &&
			!($this->Equals($this, $op))){
			$this->_operarios[] = $op;
			return true;
		}
		else
			return false;
	}
	public function Equals($fb, $op)
	{
		foreach ($fb->_operarios as $operario) {
			if($op->Equals($op, $operario))
				return true;
			else
				return false;
		}
	}
	public function Mostrar()
	{
		echo 'Fábrica: ' . $this->_razonSocial . '<br>';
		Fabrica::MostrarCosto($this);
		echo $this->MostrarOperarios();
	}
	public static function MostrarCosto($fb)
	{
		echo 'Costo total en concepto de salarios: ' . $fb->RetornarCostos() . '<br>';
	}
	private function MostrarOperarios()
	{
		$cadena = "";
		foreach ($this->_operarios as $operario) {
			$cadena .= $operario->Mostrar();
		}
		return $cadena;
	}
	public function Remove($op)
	{
		for ($i=0; $i < count($this->_operarios); $i++) { 
			if($op->Equals($op, $this->_operarios[$i]))
			{
				unset($this->_operarios[$i]);
				return true;
			}
		}
		return false;
	}
	private function RetornarCostos()
	{
		$costoTotal = 0;
		foreach ($this->_operarios as $operario) {
			$costoTotal += $operario->GetSalario();
		}
		return $costoTotal;
	}
}