<?php
echo "<pre></pre>";

//convert ASCII characters to hexadecimal values
$str = "prince";
echo bin2hex($str) . "<br><hr>";



$newstr = bin2hex("Navjot");   //convert ASCII characters to hexadecimal values
echo $newstr . "<br>";
echo hex2bin($newstr) . "<br>";   //decode hexadecimal values to  characters  
