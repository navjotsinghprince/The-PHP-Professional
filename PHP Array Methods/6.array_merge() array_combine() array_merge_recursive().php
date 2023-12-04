<?php
$food = array('orange', 'banana', 'apple', 'pineapple', '57', 88); //indexed array
$color = array('red', 'green', 'blue');
$definition = array("This is red color", "This is a green color", "this is blue color");
$lang = array('english', 'punjabi', 'hindi');

$mob = array(
    'nokia' => 10000,
    'samsung' => 13000,
    'redmi' => 14000,
    'apple' => 60000,
    'gionee' => 22000,
    'oneplus3T' => 50000
); //associative array


$mobcolor = array('nokia' => 'red', 'c2' => 'green', 'c3' => 'blue', 'apple' => 'yellow', 'c5' => 'pink');


//array_merge()= This is used to merge arrays. usage of indexed array
$newarr = array_merge($food, $color, $lang);
echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<hr>";

$myarr = array_merge_recursive($mob, $mobcolor);

#$myarr = array_merge($mob,$mobcolor);  //If two keys are the same, it will not override their values. 
//Instead, it will add them separately, creating distinct indices for each.

echo "<pre>";
print_r($myarr);
echo "</pre>";
echo "<hr>";


//array_combine()= This will use the values of the first array as keys 
//and the values of the second array as their corresponding values, creating a new associative array.
$color = array('red', 'green', 'blue');
$definition = array("This is red color", "This is a green color", "this is blue color");
$newarr = array_combine($color, $definition);
echo "<pre>";
+print_r($newarr);
echo "</pre>";

//Array Values should be same(matched); otherwise, an error will occur.
