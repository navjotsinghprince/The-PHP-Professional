<?php
$a = 0;
$b = 22;
$c = 22;
$d = 22;

$a++;  //post increment first print $a after increse value
echo "<h2>Post Increment is : " . $a . "</h2>";

++$b; //pre increment fisrt increase value then print value
echo "<h2>Pre Increment is : " . $b . "</h2>";

$c--; //post decrement first print after decrement value
echo "<h2>Post Decrement is : " . $c . "</h2>";

--$d; //post decrement first decrease after print value
echo "<h2>Pre Decrement is : " . $c . "</h2>";

//Operators presidence rules
$x = 2 + 2 * 10;     // 22 answer
$y = 2 * 2 + 10;     // 14 answer
$z = (2 + 2) * 10;   // 40 answer
