<?php

//explode(seperator,string,limit) convert string into an array 
$str = "my name is prince";
$newarr = explode(" ", $str, 4);
echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<hr>";


//implode(seperator,array); convert array into a string 
$color = array('red', 'green', 'blue', 'yellow', 'pink', 'black');
$newstring = implode(",", $color);
echo $newstring . "<br>";
var_dump($newstring);
//we can also use hyphen,wow etc <br> 
