<?php
echo "<pre></pre>";
$values = array(2, 4, 6, 8, 10);

//Return the sum of all values in array
$sum = array_sum($values);
echo "array sum is: " . $sum . "<br>";


//It will multiply the values of the array.==calculate and return the product of an array
$mob = array('nokia' => 2, 'samsung' => 2, 'redmi' => 3, 'apple' => 5);
$val = array('a' => 1.3, 's' => 5.7, 'r' => 1.4, 'a' => 1.7);


$sum = array_product($mob);
$mult = array_product($val);
echo "array multiply is: " . $sum . "<br>";
echo "array Float multiply is: " . $mult . "<br>";
