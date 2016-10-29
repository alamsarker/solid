<?php

//--------------------------------------------------------------|
// Dependency Inversion Principle(DIP)							|
//--------------------------------------------------------------|
// Entities must depend on abstractions not on concretions. 	|
// It states that the high level module must not depend on 		|
// the low level module, but they should depend 				|
// on abstractions.												|
//--------------------------------------------------------------|

include("MySQLConnection.php");
include("PasswordReminder.php");


$mysqlConnection = new MySQLConnection();
$reminder = new PasswordReminder($mysqlConnection);
$reminder->remind();

/*
--------------------
::Problem::
--------------------
	1. PasswordReminder is high level module where MySQLConnection is low level
	2. Now what if we change db engine like mongodb? if you want to do its
	required to change PasswordReminder class that voilates the open-close 
	principle
	3. Also PasswordReminder class should not care about db connection.
	4. So High level module depends of Low lavel module that breaks DIP

	See solved direcotory how to resolve that problem...


*/

?>