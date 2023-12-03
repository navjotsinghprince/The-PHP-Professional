<?php
echo "<pre></pre>";
//str_pad(string,length,pad_string,pad_type);

//length=How much length is needed 
//pad_string=which symbol should the use for padding 
//pad_type=From which side should the padding be applied: left, right, or both.
//STR_PAD_BOTH
//STR_PAD_LEFT
//STR_PAD_RIGHT

//Basically, it will increase the length of the string without adding any values

$a = "prince";
echo str_pad($a, 20, ".") . "<br>";
echo str_pad($a, 20, "-") . "<br>";
echo str_pad($a, 20, "+=") . "<br>";
echo str_pad($a, 20, "*", STR_PAD_BOTH) . "<br>";
echo str_pad($a, 20, "*", STR_PAD_RIGHT) . "<br>";
echo str_pad($a, 20, "*", STR_PAD_LEFT) . "<br>";
echo "<hr>";

//This function will repeat the string to increase its length
echo str_repeat($a . " ", 10);  //string will repeat 10 times
