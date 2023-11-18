<?php
/*the global keyword is used to access a global variables from within a function*/
$num1 = 10;   //global variable
$num2 = 20;
$sum = 0;

function mytest()
{
    global $num1, $num2, $sum;    //use global variables in local function
    $sum = $num1 + $num2;
}
mytest();
echo "<h2>the sum of two number is :" . $sum . "</h2>";
//PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
