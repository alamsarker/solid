<?php

class Cuboid {

	protected $height;
	protected $width;
	protected $length;

	public function __construct($height, $width, $length)	
	{
		$this->height = $height;
		$this->width = $width;
		$this->length = $length;

	}

	public function volume() {
		return ($this->height * $this->width * $this->length);
	}
}