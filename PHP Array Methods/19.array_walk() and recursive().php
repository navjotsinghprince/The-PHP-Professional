<?php
echo "<pre></pre>";

$mob = array(
  'nokia' => 10000,
  'samsung' => 13000,
  'redmi' => 14000,
  'apple' => 17000,
  'gionee' => 22000,
  'oneplus3T' => 50000
);

//The array_walk() functions runs each array element in a user defind function
//To run a function for each value of an array, use the array_walk function.

function myfunc($value, $key, $msg)
{
  echo "$msg  $key = $value<br>";
}
array_walk($mob, "myfunc", "The Key value is "); //like for each loop
echo "<hr>";



//multidimensional associative array example
$students = array(
  'data' => array('name' => 'prince', 'age' => '22year', 'gender' => 'boy'),
  '0' => 20,
  '1' => 40,
  '2' => 67
);

array_walk_recursive($students, "myfunc", "IS KEY OF");
