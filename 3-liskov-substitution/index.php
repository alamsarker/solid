<?php

//--------------------------------------------------------------|
// Liskov Substitution Principle(LSP)							|
//--------------------------------------------------------------|
// Let q(x) be a property provable about objects of x of type T.|
// Then q(y) should be provable for objects y of type S 		|
// where S is a subtype of T. 									|
//--------------------------------------------------------------|
//  Every subclass/derived class should be substitutable for 	|
// their base/parent class.										|
//--------------------------------------------------------------|

include("ShapeInterface.php");
include("Circle.php");
include("Square.php");
include("Cuboid.php");
include("AreaCalculator.php");
include("VolumeCalculator.php");
include("SumCalculatorOutputter.php");


$calculator = new AreaCalculator(array(
	new Circle(2),
	new Square(3),
	new Square(4)
));

$volumes = new VolumeCalculator(array(
	new Cuboid(1,3,4),
	new Cuboid(3,6,7)
));

$output = new SumCalculatorOutputter($calculator);
echo $output->json();
echo $output->html();


$output1 = new SumCalculatorOutputter($volumes);
echo $output1->json();
echo $output1->html();


/*
--------------------
::How it happened?::
--------------------
	1. VolumeCalculator extends AreaCalculator class
	2. You can see SumCalculatorOutputter take intance of AreaCalculator class
	3. In this program, we sent VolumeCalculator object to SumCalculatorOutputter but it take AreaCalculator type object
	4. So, its completly replaced the child class object with baseclass object
*/

?>