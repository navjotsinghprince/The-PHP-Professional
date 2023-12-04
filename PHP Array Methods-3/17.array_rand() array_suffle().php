<?php
//Example: When the client refreshes the website, this function will extract a value from the array and display it.
//It will return random index numbers from the array.

$color = array('red', 'green', 'blue', 'yellow', 'pink', 'black', 'white');

//$newarr=array_rand($color);        //now it will pick 1 index
$newarr = array_rand($color, 3);    //how much indexes pick
echo "<pre>";
print_r($newarr);
echo "</pre>";

//Print Random values Method
echo $color[$newarr[0]] . " ";  //$newarr[0] The random index selected will correspond to an element in the $color array.
echo $color[$newarr[1]] . " ";
echo $color[$newarr[2]] . " ";
echo "<hr>";


//When the client refreshes the website, the array values will change their positions randomly.
//Randomizes the order of the elements in an array
$mob = array('nokia' => 10000, 'samsung' => 13000, 'redmi' => 14000, 'apple' => 17000, 'gionee' => 22000, 'oneplus3T' => 50000);
shuffle($mob);
echo "<pre>";
print_r($mob);
echo "</pre>";
