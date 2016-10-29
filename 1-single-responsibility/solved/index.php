<?php

//--------------------------------------------------------------|
// Single Responsibilty Principle (SRP)							|
//--------------------------------------------------------------|
// A class should have one and only one reason to change, 		|
// meaning that a class should have only one job. 				|
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

// LOOKS GREAT??? oho

?>


