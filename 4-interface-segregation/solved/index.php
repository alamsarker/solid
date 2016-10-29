<?php

//--------------------------------------------------------------|
// Interface Segregation Principle(ISP)							|
//--------------------------------------------------------------|
// A client should never be forced to implement an interface 	|
// that it doesn’t use or clients shouldn’t be forced to 		|	
// depend  on methods they do not use.							|
//--------------------------------------------------------------|

include("ShapeInterface.php");
include("SolidShapeInterface.php");
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
::Note::
--------------------
	So we have creted two interface that is the ISP
*/

?>