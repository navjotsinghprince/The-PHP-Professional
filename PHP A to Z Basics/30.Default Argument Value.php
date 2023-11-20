<?php

function add($a = 20,$b=68)  //recieved in 2 parameters //also set default values
{
 return ($a+$b); //return result
}

function subtrac($a,$b)
{
 return ($a-$b);
}

$var = add(40);           // pass only one argument it will use own defalut parameters values
$var1 =subtrac(100,22);  //pass 2 arguments

echo "<h2>Addition is : $var</h2>";
echo "<h2>Subtraction is $var1</h2><br>";
?>
