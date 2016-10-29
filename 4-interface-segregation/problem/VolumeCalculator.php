<?php

class VolumeCalculator extends AreaCalculator
{
	public function __construct($shapes = array())
	{
		parent::__construct($shapes);
	}

	public function sum()
	{
		foreach( $this->shapes as $shape ){
			$volume[] = $shape->volume();
		}

		return array_sum($volume);
	}
}