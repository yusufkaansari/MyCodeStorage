<?php
/*
PHP has three different variable scopes:

local
global
static

*/

// GLOBAL SCOPE
	$x = 5; // global scope
	function myTest() {
// using x inside this function will generate an error
	  echo "<p>Variable x inside function is: $x</p>";
	}
	myTest();
	echo "<p>Variable x outside function is: $x</p>";

// LOCAL SCOPE
	function myTest() {
	  $x = 5; // local scope
	  echo "<p>Variable x inside function is: $x</p>";
	}
	myTest();
// using x outside the function will generate an error
	echo "<p>Variable x outside function is: $x</p>";

?>
