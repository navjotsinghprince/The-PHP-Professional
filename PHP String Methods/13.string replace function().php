<?php
echo "<pre></pre>";
//It will remove a specific word or character from a string and replace it with a new character
//str_replace(find,replace,string)

$str = "hello i m prince";
echo str_replace("hello", "welcome", $str) . "<br>"; //Replace 'hello' with 'welcome'
echo str_replace("hello", "", $str) . "<br>"; //Replace 'hello' with '' empty string
echo "<hr>";

//To replace two words at once
$str = "hello i m prince";
$find = array("hello", "prince");
$replace = array("hii", "navjot");
echo str_replace($find, $replace, $str) . "<br>";
echo str_ireplace($find, $replace, $str) . "<br>";
echo "<hr>";

//we can also change array value
$st = "hello i m navjot";
$color = array('red', 'green', 'blue', 'yellow');
$new = str_replace("red", "black", $color); //Replace 'red' with 'black'
print_r($new);
echo "<hr>";

//From a specific starting point to an ending point in the string.
//substr_replace(string ,replacement ,start,length)
$str = "hello world this world is nice";
echo substr_replace($str, "github", 6) . "<br>";
echo substr_replace($str, "github", 6, 10) . "<br>";
echo substr_replace($str, "github ", 0, 0) . "<br>";
echo "<hr>";


$a = "i love php , i love php too";
$arr = array("love" => "hate", "php" => "molbolge");
// Remove 'i' with 'h'
// Remove 'p' with 'z'.
//strtr(string,from,to)
echo strtr($a, "ip", "hz") . "<br>";

//we can also use an array for change values kay based
echo strtr($a, $arr) . "<br>";
