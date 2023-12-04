<?php

//To run a function for each value in an array
$num = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
function square($v)
{
     return $v * $v;
}
$new = array_map('square', $num);
echo "<pre>";
print_r($new);
echo "<pre>";
echo "<hr>";


//To return a multidimensional array using two arrays.
$num = array(100, 200, 300, 400, 500, 600, 700, 800);
$food = array('orange', 'banana', 'apple', 'grapes', 'apple', 'pineapple', 'grapes', 'guwawa');

function myfun($n, $f)
{
     return [$n => $f];
}
$new = array_map('myfun', $num, $food);
echo "<pre>";
print_r($new);
echo "</pre>";
echo "<hr>";

//multidiemensional array example
$myarr = array(
     'one' => 'apple',
     'two' => 'nokia',
     'three' => 'oneplus'
);

function mycaseconvert($v)
{
     return strtoupper($v);
}

$new = array_map('mycaseconvert', $myarr);
echo "<pre>";
print_r($new);
echo "</pre>";
echo "<hr>";
