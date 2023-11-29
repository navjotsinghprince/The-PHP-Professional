<?php
$mob = array(
  'nokia' => 10000,
  'samsung' => 13000,
  'redmi' => 14000,
  'apple' => 17000,
  'gionee' => 22000,
  'oneplus3T' => 50000
);

//It will swap the keys and values of the array, essentially interchanging them.
$newarr = array_flip($mob);
echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<hr>";


//Change all keys in an array to Uppercase
$newarr = array_change_key_case($mob, CASE_UPPER); //Now, the "name" key will be converted to uppercase.  // [NOKIA] => 10000
echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<hr>";
