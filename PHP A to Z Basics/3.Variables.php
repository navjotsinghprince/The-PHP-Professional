<?php
//Variables are 'containers' for storing information
//In PHP, a variable starts with the $sign, followed by the name of the variable:-

$name = "Prince<br>";
$num = 4874;
$float = 563.763;
echo "my name is : " . $name;
echo "<h1>Addition of int and float is : " . ($num + $float) . "</h1><br>";

//Rules for declare PHP variables:
$x = "string";
$simplename = "string";
$numaricname23 = "string";
$underscore_name = "string";
$CamelCaseName = "string";
$_start_underscore_name = "string";

// A variable starts with the $ sign, followed by the name of the variable
// A variable name must start with a letter or the underscore character
// A variable name cannot start with a number
// A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
// Variable names are case-sensitive ($age and $AGE are two different variables)

$txt1 = "Programming";
echo "I love $txt1!<br>";

$txt2 = "Hacking";
echo "I love " . $txt2 . "!<br>";

$txt3 = "Cracking";
echo "I love {$txt3}";
