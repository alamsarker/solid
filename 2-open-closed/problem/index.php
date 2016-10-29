<?php

//--------------------------------------------------------------|
// Open-closed Principle (OCP)									|
//--------------------------------------------------------------|
// Objects or entities should be open for extension, 			|
// but closed for modification..								|
//--------------------------------------------------------------|
// Simply means that a class should be easily extendalbe without|
// modifying the class itself.									|
//--------------------------------------------------------------|

include("Circle.php");
include("Square.php");
include("AreaCalculator.php");
include("SumCalculatorOutputter.php");

$shapes = array(
	new Circle(2),
	new Square(3),
	new Square(4)
);

$calculator = new AreaCalculator($shapes);
$output = new SumCalculatorOutputter($calculator);

echo $output->json();
echo $output->html();


/*
::Problem::
-----------
Closly Look at the sum method of AreaCalculator class.

public function sum()
{
	foreach( $this->shapes as $shape ) {
		if( is_a($shape, 'Square') ) {
			$area[] = pow($shape->length, 2);
		} else if( is_a($shape, 'Circle') ) {
			$area[] = pi() * pow($shape->radius, 2);
		}
	}		

	return array_sum($area);
}

*** if we wanted the sum method to be able to sum the areas of more shapes, 
we would have to add more if/else blocks and that goes 
against the Open-closed principle.

Lets solve this problem in sovled directory by moving the logic into shape classes.

*/
?>


