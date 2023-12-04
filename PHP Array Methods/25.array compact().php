<?php

$firstname = 'Navjot';
$lastname = 'Singh';
$age = '19';
$mobile = 6500238456;

//It converts variable's name to key and values as same above variables
//associative array return krega
$newarr = compact('firstname', 'lastname', 'age', 'mobile');

echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<hr>";
