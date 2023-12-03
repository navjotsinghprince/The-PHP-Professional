<?php
echo "<pre></pre>";

$str = "prince";
$str2 = "PRINCE is a programmer";

echo strtoupper($str) . "<br>";  //convert all string to uppercase
echo strtolower($str) . "<br>";  //convert all string to lowercase

echo lcfirst($str2) . "<br>";  //convert string first letter to lowercase
echo ucfirst($str) . "<br>"; //convert string first letter to uppercase
echo ucwords("prince is a programmer") . "<br>"; //Uppercase the first character of each word in a string
