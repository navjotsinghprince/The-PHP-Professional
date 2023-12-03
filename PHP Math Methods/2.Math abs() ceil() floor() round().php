<?php
echo "<pre></pre>";
//Return a Absolute (Postive) value of a number
//abs() = It will remove any sign of the value and return the absolute value
echo "<h2>Absolute values Example</h2>";
echo abs(+0.60) . "<br>";
echo abs(-0.50) . "<br>";
echo abs(5) . "<br>";
echo abs(5.1) . "<br>";
echo abs(-5.1) . "<br>";
echo "<hr>";


//floor() = It will return the base of both and the bottom value below
echo "<h2>Floor values Example</h2>";
echo floor(0.60) . "<br>";
echo floor(0.50) . "<br>";
echo floor(5) . "<br>";
echo floor(5.1) . "<br>";
echo floor(-5.1) . "<br>";
echo "<hr>";

//ceil() = This function will return the upper value
echo "<h2>Ceil values Example</h2>";
echo ceil(0.60) . "<br>";
echo ceil(0.50) . "<br>";
echo ceil(5) . "<br>";
echo ceil(5.1) . "<br>";
echo ceil(-5.1) . "<br>";
echo "<hr>";

//round() = If the value is below .5, this function will return the base value.
//If the value is above .5, it will add 1 to it and return the value.
echo "<h2>Round values Example</h2>";
echo round(0.60) . "<br>";
echo round(0.40) . "<br>";
echo round(5) . "<br>";
echo round(4.2) . "<br>";
echo round(4.5) . "<br>";
echo round(-5.1) . "<br>";
echo "<hr>";
