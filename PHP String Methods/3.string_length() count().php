<?php
echo "<pre></pre>";
$a = "Prince";
$b = "my name is prince";
$str = "hello world,this world is nice!";

//Returns the length of a String 
echo "String length Is:" . strlen($a) . "<br>";

//string word count krne k liye 
//str_word_count(string, return);
echo "Total string words counting is:" . str_word_count($b); //my(1) (2)name (3)is (4)prince


//it will count the words in the string and then generate an array
$newarr = str_word_count($b, 1);
echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<hr>";


//It will create an index based on the position of the first letter of the string, given that the second parameter is 2
$b = "my name is prince";  //At index0 = 'my' and at index3 = 'name' will be placed.
$newarr = str_word_count($b, 2);
echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<hr>";
