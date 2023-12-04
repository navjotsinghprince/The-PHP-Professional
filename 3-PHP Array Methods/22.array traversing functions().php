<?php
$color = array('red', 'green', 'blue', 'yellow', 'pink', 'black', 'brown', 'white', 'grey', 'orange');
$mob = array(
  'nokia' => 10000,
  'samsung' => 13000,
  'redmi' => 14000,
  'apple' => 17000,
  'gionee' => 22000,
  'oneplus3T' => 50000
);

//To selectively pick different values within an array, 
//Note: When the page loads, the internal pointer of the array is positioned at the first element, typically at index 0.

echo "<b>CURRENT POSITION VALUE</b> =" . current($color) . "<br>";   //return array current position value
echo "<b>POSITION</b> =" . pos($color) . "<br>";                  //same works as current position
echo "<b>KEY </b> =" . key($mob) . "<br>";                       //return internal pointer key value
echo "<b>NEXT VALUE</b> =" . next($color) . "<br>";             //move the pointer to the next position and return the value.
echo "<b>PREVIOUS VALUE</b> =" . prev($color) . "<br>";         //return array previous value
echo "<b>END VALUE</b> =" . end($color) . "<br>";              //return array ending value
echo "<b>RESET VALUE</b> =" . reset($color) . "<br>";          //internal pointer moves to current position

//It will return the key and value in a new array.
$newarr = each($mob);  //deprecated in php 7.2 version no need to learn this
echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<hr>";
