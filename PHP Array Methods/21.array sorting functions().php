<?php
//These functions sorts the array.
//ascending order 1-10,a-z
//descending order 10-1, z-a
$color = array('red', 'green', 'blue', 'yellow', 'pink', 'black', 'brown', 'white', 'grey', 'orange',);

$mob = array(
  'nokia' => 10000,
  'samsung' => 13000,
  'redmi' => 14000,
  'apple' => 17000,
  'gionee' => 22000,
  'oneplus3T' => 50000
);

sort($color); //sort ascending order a-z
//rsort($color); //sort dscending order z-a
echo "<pre>";
print_r($color);
echo "</pre>";
echo "<hr>";


asort($mob);  //associative array only values sort a-z
//arsort($mob);  //associative array only values sort z-a
echo "<pre>";
print_r($mob);
echo "</pre>";
echo "<hr>";


ksort($mob);  //associative array only key sort a-z
krsort($mob);  //associative array only key sort z-a
echo "<pre>";
print_r($mob);
echo "</pre>";
echo "<hr>";


$myarr = array("img2.png", "img5.png", "img10.png", "Img7.png", "img8.png", "Img4.png", "Img1.png",);
//It sorts the natural array,,  alpha+integar nu
//natsort($myarr);    //sort the array in ascending order.
natcasesort($myarr); //This function resolves the case-sensitive issue with "UpperCase I" while sorting.
echo "<pre>";
print_r($myarr);
echo "</pre>";
echo "<hr>";



$color1 = array('red', 'green', 'yellow', 'pink', 'black', 'white', 'grey', 'orange');
$color2 = array('red', 'green', 'yellow', 'pink', 'black', 'white', 'grey', 'orange');
//It sorts mutiple array , but it will with same values
array_multisort($color1, $color2);
echo "<pre>";
print_r($color1);
print_r($color2);
echo "</pre>";
echo "<hr>";



$numbers = array(10, 20, 'ram', 40, 'app', 'zzz', 70, 80, 'sham', 100);
//This function will sort the array in reverse order and return a new array.
$new = array_reverse($numbers);
echo "<pre>";
print_r($new);
echo "</pre>";
echo "<hr>";
