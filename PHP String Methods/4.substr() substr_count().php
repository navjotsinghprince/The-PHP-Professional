<?php
echo "<pre></pre>";
$str = "i love php,i love php too!";


//substr(string,start,length) ====Returns a part of a string
echo substr($str, 5) . "<br>";
echo substr($str, 0, 10) . "<br><br><hr>";



//This function will check how many times the searched word exists in the string.
//substr_count(string,yoursubstr,start,length);
//start = where to start
//length = where to end
$str = "hello world,this world is nice!";

echo "whole string search Result: " . substr_count($str, "world") . "<br>";

echo "particular starting ending search Result : " . substr_count($str, "world", 2, 10);
