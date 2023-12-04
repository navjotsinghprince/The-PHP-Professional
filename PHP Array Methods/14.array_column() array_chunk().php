<?php
$students = array(
	'first' => array('name' => 'prince', 'age' => '22year', 'gender' => 'boy'),
	'second' => array('name' => 'raman', 'age' => '19year', 'gender' => 'girl'),
	'third' => array('name' => 'anu', 'age' => '21year', 'gender' => 'girl'),
	'fourth' => array('name' => 'sukh', 'age' => '23year', 'gender' => 'girl')
);
//Return The values from a single column in the input array //Return an indexed array 
//Get column of age from a record set with name 

//$newarr=array_column($students,'age');   //single column values return
$newarr = array_column($students, 'age', 'name'); //two column values return
echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<hr>";


//return Split an Array into chunks of two  //Other words, It will return the array divided into two parts.
$mob = array('nokia' => 10000, 'samsung' => 13000, 'redmi' => 14000, 'apple' => 17000, 'gionee' => 22000, 'oneplus3T' => 50000);

//it returns multidimensionl array
//$new=array_chunk($mob,3); //second parameter is the size of each chunk

$new = array_chunk($mob, 3, true);

//If you provide the option to preserve keys, the value will be returned as [nokia] => 10000.
echo "<pre>";
print_r($new);
echo "</pre>";
echo "<hr>";
