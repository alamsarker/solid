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

$shapes = array(
	new Circle(2),
	new Square(3),
	new Square(4)
);

$areas = new AreaCalculator($shapes);
echo $areas->output();

/**
* NOTE::
*
* What if the user wanted to output the data as json or something else?
* All of the logic will be handled in AreaCalculator class.
* This is what SRP BREAKS becuase the AreaCalculator should only sum the
* areas of provided shapes, it should not care about the output like json or HTML
*
*
* HOW TO SOLVE???
* Lets check the solved section
*/

?>


