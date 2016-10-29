<?php

//--------------------------------------------------------------|
// Dependency Inversion Principle(DIP)							|
//--------------------------------------------------------------|
// Entities must depend on abstractions not on concretions. 	|
// It states that the high level module must not depend on 		|
// the low level module, but they should depend 				|
// on abstractions.												|
//--------------------------------------------------------------|

include("DBConnectionInterface.php");
include("MySQLConnection.php");
include("PasswordReminder.php");


$mysqlConnection = new MySQLConnection();
$reminder = new PasswordReminder($mysqlConnection);
$reminder->remind();


?>