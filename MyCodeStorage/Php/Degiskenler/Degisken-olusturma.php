<?php

/*
Rules for PHP variables:

A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)

*/
	$abc = 'Welcome';  //valid
	$Abc = 'W3resource.com'; //valid
	$9xyz = 'Hello world';  //invalid; starts with a number
	$_xyz = 'Hello world';  //valid; starts with an underscore
	$_9xyz = 'Hello world';  //valid
	$aäa = 'Hello world';  //valid; 'ä' is (Extended) ASCII 228.

?>
