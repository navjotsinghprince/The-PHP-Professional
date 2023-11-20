<?php
echo "<pre>";
//The PHP comparison operators are used to compare two values (number or string):
$x = 100;
$y = "100";
$z = 80;

echo var_dump($x == $y) . "<hr>";   // returns true because values are equal
echo var_dump($x === $y) . "<hr>";  // returns false because values and also check data type is not equal
echo var_dump($x != $y) . "<hr>";  // returns false because values are equal don't check data type
echo var_dump($x !== $y) . "<hr>"; // returns true because types are not equal also check data type
echo var_dump($x <> $y) . "<hr>"; // returns false because values are equal same works as not operator

echo var_dump($x > $z) . "<hr>";  // returns true because $x is greater than $z
echo var_dump($y < $z) . "<hr>"; //  //returns false because $z is $less than $x
echo var_dump($x >= $z) . "<hr>"; // returns true because $x is greater than or equal to $z
echo var_dump($x >= $z) . "<hr>"; // returns false because $z is $less than or  equal to $z

//space ship operators
//Returns an integer $less than, equal to, or greater than zero, depending on if $x is $less than, equal to, or greater than $y. Introduced in PHP 7.
$x = 5;
$y = 10;
echo ($x <=> $y); // returns -1 because $x is $less than $y
echo "\n";

$x = 10;
$y = 10;
echo ($x <=> $y); // returns 0 because values are equal
echo "\n";

$x = 15;
$y = 10;
echo ($x <=> $y); // returns +1 because $x is greater than $y
