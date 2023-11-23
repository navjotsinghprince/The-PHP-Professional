<?php

$mobcolor = array('c1' => 'red', 'c2' => 'green', 'c3' => 'blue', 'c4' => 'yellow', 'c5' => 'pink');
//array_keys(array) = return all array's keys into new array
//array_key_exists(keyname,array) = This checks whether a key exists in an array or not.


$keysarr = array_keys($mobcolor);
echo "<pre>";
print_r($keysarr);
echo "</pre>";
echo "<hr>";

$result = array_key_exists("c2", $mobcolor);  //return 1true or 0false
if ($result) {
	echo "KEY FIND SUCCESSFULLY";
} else {
	echo "KEY DOES'NOT FIND";
}
