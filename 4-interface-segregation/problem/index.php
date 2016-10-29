<?php

//--------------------------------------------------------------|
// Interface Segregation Principle(ISP)							|
//--------------------------------------------------------------|
// A client should never be forced to implement an interface 	|
// that it doesn’t use or clients shouldn’t be forced to 		|	
// depend  on methods they do not use.							|
//--------------------------------------------------------------|

include("ShapeInterface.php");
include("Circle.php");
include("Square.php");
include("Cube.php");
include("Hexagon.php");
include("AreaCalculator.php");
include("VolumeCalculator.php");
include("SumCalculatorOutputter.php");


$calculator = new AreaCalculator(array(
	new Circle(2),
	new Square(3),
	new Square(4)
));

$volumes = new VolumeCalculator(array(
	new Cube(1,3,4),
	new Hexagon(6,7)
));

$output = new SumCalculatorOutputter($calculator);
echo $output->json();
echo $output->html();


$output1 = new SumCalculatorOutputter($volumes);
echo $output1->json();
echo $output1->html();


/*
--------------------
::Problem is::
--------------------
	1. Added volume() method in ShapeInterface
	2. Now any shape we create must implement the volume method, but we know that squares are flat shapes and that they do not have volumes.

	Thats break the ISP principle. Please check solved directory to resolved this problem
*/

?>