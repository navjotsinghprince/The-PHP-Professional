<?php
$a = "prince";
//It saves each character of the string at the array index 
//str_split(string,length)
$newarr = str_split($a, 1);
//$newarr =str_split($a,2);  //get every each 2 characters
echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<hr>";



//The chunk_split() function splits into a series of smaller parts.
//chunk_split(string,length,end);
//length = After how many characters should a hyphen be added
//end = what character can be used to indicate the ending

$str = "princeferozepuria";
$br = "<br>";
$newstr = chunk_split($str, 1, "."); //A dot will be added after every single character.
echo $newstr . $br;


$newstr1 = chunk_split($str, 3, "-"); //After every 3 characters, a hyphen will be added
echo $newstr1;
