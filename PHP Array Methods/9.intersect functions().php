<?php
//intersect" means finding common values between two or more things.

$a = array('a' => 'ram', 'b' => 'sham', 'c' => 'sita', 'd' => 'gita');
$b = array('a' => 'ram', 'b' => 'smith', 'd' => 'gita');
$c = array('a' => 'ram', 'b' => 'black', 'c' => 'gita');

//Compare the common values of two array and return the matches //Note: It will extract these values from the first array.
//$newarr = array_intersect($a,$b);
$newarr = array_intersect($a, $b, $c);


//Compares the common key of two or more array and return the matches //Note: It will extract these values from the first array.
//$newarr = array_intersect_key($a,$b,$c);


//Compare the common keys and common values and return the matches  //Note: It will extract these values from the first array.
//$newarr = array_intersect_assoc($a,$b,$c);

echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<hr>";
