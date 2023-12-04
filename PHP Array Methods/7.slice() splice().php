<?php
echo "<pre></pre>";

$food = array('orange', 'banana', 'apple', 'pineapple', '57', 88); //indexed array

//array_slice()= This function will extract the values from the array and return it.
//array_slice(arrayname,startingpoint,length);

//$newarr =array_slice($food,1);
//$newarr =array_slice($food,1,3);
//$newarr =array_slice($food,-3,2);

//The fourth parameter is optional, and it represents the index number from where the values are extracted
$newarr = array_slice($food, 2, 4); //index 2 to 4 length tak values
echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<hr>";

//associative array example
$mob = array('nokia' => 10000, 'samsung' => 13000, '99' => 14000, 'apple' => 17000, 'gionee' => 22000, 'oneplus3T' => 50000);


//$newarr =array_slice($mob,1,3);  //If true not provided, it returns index 0 instead of key 99.

$newarr = array_slice($mob, 0, 3, true); //If true provided then return key 99
echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<hr>";

/*array_splice() function  3 uses 
1= To add a value in the middle of an array.
2= To extract a value from the middle of an array.
3= To remove a value from the middle of an array.*/

//array_splice(array_name,start,length,array-2);
$color = array('red', 'green', 'blue', 'yellow', 'black', 'brown', 'white', 'pink');
$names = array('ram', 'sham', 'rita', 'sita');

//array_splice($color,0,2);              //2 elelment will be removed
//array_splice($color,2,4,$names);       //From index 2 onwards, 4 new values will be added to the array.
//array_splice($color,1);                //Delete values from index 1 to the last index.
//array_splice($color,2,2);              //blue yellow will be delete ,To remove a value from the middle.
$newarrr = array_splice($color, 1, -1);  //only first and last values exist.
//array_splice($color,0,-1);             //last value exist only 
//array_splice($color,-7,7);             //first value exist only


echo "<pre>";
print_r($color);
echo "</pre>";
echo "<hr>";
