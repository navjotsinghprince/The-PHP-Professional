<?php
//Return The all Values new indexed array (not in keys)
$food = array('orange', 'fruit' => 'banana', 'apple', 'grapes', 'apple', 'age' => 23, 'id' => 160);

//It will return a new indexed array with the extracted values from the given($food) array.
$newarr = array_values($food);
echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<hr>";


//Remove duplicate values from an array return an array
$newarr = array_unique($food);
echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<hr>";
