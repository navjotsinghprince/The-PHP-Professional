<?php
echo "<pre></pre>";
//max(value1,value2) //return maximum value
//max(array_values)  //return maximum value

$val = max(1, 2, 3, 4);
echo $val . "<br>";  //return maximum value

$val = min(1, 2, 3, 4); //return minimum value
echo $val . "<br>";

$arr = array(101, 102, 201, 301, 402); //use with single array
echo min($arr) . "<hr>";

$arr1 = array(2, 4, 8);
$arr2 = array(2, 5, 1);
$result = max($arr1, $arr2);  //use and compare two array values
//When 5 is found at the second index of arr2, it will not check the subsequent values.

echo "<pre>";
print_r($result);
echo "</pre>";

$bool1 = max(true, false);  //return 1
$bool2 = min(true, false);  //return 0 
echo $bool1 . "<br>";
echo $bool2 . "<br>";
