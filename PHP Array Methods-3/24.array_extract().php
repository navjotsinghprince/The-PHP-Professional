<?php
echo "<pre></pre>";

$mob = array(
  'nokia' => 10000,
  'samsung' => 13000,
  'redmi' => 14000,
  'apple' => 17000,
  'gionee' => 22000,
  'oneplus3T' => 50000
);

//To convert the key of an array into a variable
//extract(array,extract_rules,prefix);
//EXTR_OVERWRITE=It will display the array keys only and remove the external values.

$nokia = "smartphone";
//EXTR_SKIP=It will take the value of the external variable and skip the key.
//EXTR_PREFIX_SAME=It will use both the value from the external variable and the internal (array) value.
//EXTR_PREFIX_ALL=To use a prefix for all values.

extract($mob, EXTR_OVERWRITE, "test");

echo 'value of nokia is ' . $nokia . "<br>";
echo 'value of samsung is ' . $samsung . "<br>";
echo 'value of redmi is ' . $redmi . "<br>";
echo 'value of apple is ' . $apple . "<br>";
echo 'value of gionee is ' . $gionee . "<br>";
echo 'value of oneplus3T is ' . $oneplus3T;
