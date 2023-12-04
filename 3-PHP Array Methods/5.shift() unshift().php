<?php

$mob = array(
    'nokia' => 10000,
    'samsung' => 13000,
    'redmi' => 14000,
    'apple' => 60000,
    'gionee' => 22000,
    'oneplus3T' => 50000
);

//array_shift() = It will delete the value at the first index of the array.
array_shift($mob);
echo "<pre>";
print_r($mob);
echo "</pre>";


//array_unshift() = It will add values to the first index of the array.
array_unshift($mob, 'pixel', 'sony', 'blackberry');
echo "<pre>";
print_r($mob);
echo "</pre>";
