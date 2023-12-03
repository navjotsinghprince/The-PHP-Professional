<?php
echo "<pre></pre>";
//It will return random values each time the page is refreshed.
//rand(mix,max)

echo rand() . "<br>";
echo rand(0, 10) . "<br>";     //generate values between 0 and 10.
echo mt_rand(0, 10) . "<br>";  //same works as rand function  but 4*faster(mersenne twister algorithm) 
echo lcg_value() . "<br>";    //It will return random decimal values between 0 and 1
