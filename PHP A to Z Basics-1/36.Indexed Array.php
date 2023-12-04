<?php
echo "<pre></pre>";

//An array stores multiple values in one single variable:
//the array() function is used to create an array:
/*In PHP, there are three types of arrays:

Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays*/

$CoronaVirus = array("China", "Itly", "USA", "Spain");    //first way of creation [index starts at 0
echo "Check MOST Infected Countries : " . $CoronaVirus[0] . ", " . $CoronaVirus[1] . ", " . $CoronaVirus[2] . ".";
echo "<hr>";

$arr[0] = "sun"; //second way of creation
$arr[1] = "earth";
$arr[2] = array("china", "italy", "usa", "spain");
$arr[3] = "tree";
$arr[4] = "";
$arr[5] = "air";
$arr[6] = null;
$arr[7] =  100;
$arr[8] =  56.8555;
$arr[9] =  true;
$arr[9] =  "87979";

echo $var = is_array($arr[2]);

//The count() function is used to return the length (the number of elements) of an array: starts from 1
$arrlength = count($arr);
echo "Total Array length is :" . $arrlength . "<br>";


//Loop Through an Indexed Array
for ($i = 0; $i < $arrlength; $i++) {
	if (is_array($arr[$i]) == 1) {
		echo "This is array Data-type<br>";
		continue;
	}
	echo $arr[$i] . "<br>";
}
