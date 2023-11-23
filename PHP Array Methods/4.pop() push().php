<?php 
$mob = array(
    'nokia'=>10000,
    'samsung'=>13000,
    'redmi'=>14000,
    'apple'=>60000,
    'gionee'=>22000,
    'oneplus3T'=>50000); 

//array_pop() = It will delete the last index value of the array.
array_pop($mob);
echo "<pre>";
print_r($mob);
echo "</pre>";


//array_push() = It will add a value to the last index of the array.
array_push($mob,'pixel','sony','blackberry');

echo "<pre>";
print_r($mob);
echo "</pre>";

?>