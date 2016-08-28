<?php
class Rectangulo
{
	//CAMPOS
	private $_vertice1;
	private $_vertice2;
	private $_vertice3;
	private $_vertice4;
	public $area;
	public $ladoUno;
	public $ladoDos;
	public $perimetro;
	//MÉTODOS
	function __construct($v1, $v3)
	{
		$this->_vertice1 = $v1;
		$this->_vertice3 = $v3;
		$this->_vertice2 = new Punto($v3->GetX(), $v1->GetY());
		$this->_vertice4 = new Punto($v1->GetX(), $v3->GetY());
		$this->ladoUno = $this->_vertice4->GetY() - $this->_vertice1->GetY();
		$this->ladoDos = $this->_vertice2->GetX() - $this->_vertice1->GetX();
		$this->area = $this->ladoUno * $this->ladoDos;
		$this->perimetro = $this->ladoUno * 2 + $this->ladoDos * 2;
	}
	public function Dibujar()
	{
		$image = imageCreate($this->_vertice3->GetX() + 1, $this->_vertice3->GetY() + 1);
		$white = imageColorAllocate($image, 255, 255, 255);
		$black = imageColorAllocate($image, 0, 0, 0);
		imageFill($image, 0, 0, $white);
		imageRectangle($image, $this->_vertice1->GetX(), $this->_vertice1->GetY(), $this->_vertice3->GetX(), $this->_vertice3->GetY(), $black);
		imagePng($image, "rectangulo.png");
		imageDestroy($image);
		/*
		for ($i=1; $i <= (int)$this->ladoUno; $i++) { 
			for ($j=1; $j <= (int)$this->ladoDos; $j++) { 
				echo '*';
			}
			echo '<br>';
		}*/
	}
}