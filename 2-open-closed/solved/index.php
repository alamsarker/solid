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
::Solved by::
-----------
a) Moving logic adding area() method into shape class
b) adjustment on sum() method of AreaCalculator	class

Now we add new shape easily without changing any classes.

But its created another problem that is:
 -> How do we know that the object passed into the AreaCalculator is actually a shape or if the shape has a method named area?

 # That has been solved in additional-solved directory
*/
?>