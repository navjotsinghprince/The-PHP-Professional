<?php


$x = 8;
$x += 10;   // x = x+10 to 8+10 = 18;
echo "<h4>" . $x . "</h4>";

$x = 8;
$x -= 10;   // x = x-10 to 8-10 equal to -2;
echo "<h4>" . $x . "</h4>";

$x = 8;
$x *= 10;   // x = x*10 to 8*10 equal to 80;
echo "<h4>" . $x . "</h4>";

$x = 8;
$x /= 10;   // x = x/10 to 8/10 equal to 0.8;  //8 inside and 10 outiside
echo "<h4>" . $x . "</h4>";

$x = 8;
echo "<h4>" . $x . "</h4>";

$x = 8;
$x **= 10;   // x = x**10 to 8**10 equal 327678
echo "<h4>" . $x . "</h4>";

$v = 10000;
$w = 5;
$w = $w = $v;  // reverse override values
echo $w;      //10000
