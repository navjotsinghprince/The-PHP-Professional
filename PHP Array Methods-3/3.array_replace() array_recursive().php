<?php
echo "<pre></pre>";
$food = array('orange', 'banana', 'apple', 1 => 'apple', '57', 88);
$color = array('red', 'green', 'blue', 'yellow');
$lang = array('english', 'punjabi', 'hindi');

$mob = array(
    'nokia' => 10000,
    'samsung' => 13000,
    'redmi' => 14000,
    'apple' => 60000,
    'gionee' => 22000,
    'oneplus3T' => 50000
);

$students = array( //multidimensionl associative array
    'first' => array('prince', '22year', 'boy'),
    'second' => array('raman', '19year', 'girlfriend'),
    'third' => array('anu', '21year', 'girlfriend'),
    'fourth' => array('sukh', '23year', 'girlfriend')
);


//array_replace() = This function will replace the values of the first array with the values of the second array.
//$newarr = array_replace($food ,$color);           //2 array replacement example
$newarr = array_replace($food, $color, $lang);     //3 array replacement example
echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<hr>";


//array_replace_recursive() = This function will replace the values of the first associative array with 
//the values of the second associative array and then combine them to return a new array.
$mob = array(
    'nokia' => 10000,
    'samsung' => 13000,
    'redmi' => 14000,
    'apple' => 60000,
    'mi' => 22000,
    'oneplus3T' => 50000
);

$color = array(
    'c1' => 'red',
    'c2' => 'green',
    'c3' => 'blue',
    'c4' => 'yellow',
    'c5' => 'pink'
);

$newarr = array_replace_recursive($mob, $color);  //replace key and values
echo "<pre>";
print_r($newarr);
echo "</pre>";
