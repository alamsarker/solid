<?php

class AreaCalculator
{
	protected $shapes;

	public function __construct($shapes = array())
	{
		$this->shapes = $shapes;
	}

	public function sum()
	{
		foreach( $this->shapes as $shape ) {
			$area[] = $shape->area();
		}		
		return array_sum($area);
	}
	
}
?>