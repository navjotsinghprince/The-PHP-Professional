<?php
//It will concatenate all the values of the array to create a string.
//It can also perform arithmetic operations.

$lang = array('english', 'punjabi', 'hindi');

function myfunc($v1, $v2)
{
    return $v1 . "=" . $v2;
}

//array_reduce(arrayname,function,initial value)
$newarr = array_reduce($lang, "myfunc", "LANGUAGES:");
//echo var_dump($newarr); //string(32) 
echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<hr>";


function myfun($carry, $value)
{
    return $carry + $value; //as you can do many operations like * / - etc
}
$digits = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$new = array_reduce($digits, "myfun", 0);
echo "<pre>";
print_r($new);
echo "</pre>";
echo "<hr>";
