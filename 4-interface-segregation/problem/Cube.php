<?php

class Cube implements ShapeInterface {

	protected $height;
	protected $width;
	protected $length;

	public function __construct($height, $width, $length)	
	{
		$this->height = $height;
		$this->width  = $width;
		$this->length = $length;

	}

	public function area(){

	}

	public function volume() {
		return ($this->height * $this->width * $this->length);
	}
}