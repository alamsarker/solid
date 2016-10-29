<?php

class SumCalculatorOutputter
{
	protected $calculator;

	public function __construct( AreaCalculator $calculator)
	{
		$this->calculator = $calculator;

	}
	public function json()
	{
		$data = array(
            'sum' => $this->calculator->sum()
        );

        return json_encode($data);	
	}

	public function html()
	{
		return implode('', array(			
			"<h1>",
			"Sum of the areas of provided shapes: ",
			$this->calculator->sum(),
			"</h1>"
		));
	}

	public function JADE()
	{

	}
}

