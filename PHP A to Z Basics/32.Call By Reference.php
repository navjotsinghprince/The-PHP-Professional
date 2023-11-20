<?php
echo "<pre></pre>";
//Call By Reference means passing the address of variable where the actual value is stored. 
//The called function uses the value stored in the passed address ; 
//Any changes to do it do affect the source variable. Here is the example

function swap(&$a, &$b)
{
	//We are changing the value at the source address of the variable.
	$temp = $a;
	$a = $b;
	$b = $temp;
}

$a = 10;
$b = 20;
echo "Before Calling function values are : <br>";
echo "Variable A Value is : $a <br>";
echo "Variable B Value is : $b <hr>";

swap($a, $b);
echo "After Calling Function Values are :  <br>";
echo "Variable A Value is : $a <br>";
echo "Variable B Value is : $b <br>";
echo "<hr>";
