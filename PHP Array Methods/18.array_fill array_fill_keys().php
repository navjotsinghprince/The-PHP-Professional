<?php
$a =  array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r');
//It will create a new array by using the values as associative keys and assigning a fixed value to each of these keys.

$newarr = array_fill_keys($a, "WOW fixed value"); //second parameter array ki value
echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<hr>";



//If there is no existing array, but you want to create one with fixed values with indexed array,
//array(index,length of values,your fixed value);
$new = array_fill(0, 99, "fix values yrr");
echo "<pre>";
print_r($new);
echo "</pre>";
echo "<hr>";
