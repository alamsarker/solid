<?php

class Hexagon implements ShapeInterface {

	protected $height;
	protected $base;	

	public function __construct($height, $base)	
	{
		$this->height = $height;
		$this->base  = $base;
	}

	public function area(){

	}

	public function volume() {		
		return 2.6 * pow($this->base, 2) * $this->height;		
	}
}