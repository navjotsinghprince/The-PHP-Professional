<?php
//Compare the values of two or more  array and return the different/values
//The function is used to extract different values from an array.

$a = array('a' => 'ram', 'b' => 'sham', 'c' => 'sita', 'd' => 'gita', 'e' => 'hello');  //It will extract different values from the first($a) array.
$b = array('a' => 'ram', 'b' => 'smith', 'd' => 'gita');
$c = array('a' => 'ram', 'b' => 'black', 'c' => 'gita');


//It will return an array by extracting distinct(different) values from the given array.
//$newarr = array_diff($a,$b,$c);

//It will return an array by extracting distinct(different) keys from the given array.
//$newarr = array_diff_key($a,$b,$c);

//It will return an array by extracting both distinct(different) keys and values from the given array.
$newarr = array_diff_assoc($a, $b, $c);

echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<hr>";
