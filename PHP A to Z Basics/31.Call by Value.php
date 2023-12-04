<?php
echo "<pre></pre>";
//Call By Value means  passing the value directly to a function the called function uses the value in a local varibales; 
//Any changes to do not affect the source variable.

function swap($a, $b)
{
  $temp = $a;
  $a = $b;
  $b = $temp;
  echo "Inside function<br>";
  echo "Variable a Value is : $a <br>";
  echo "Variable b Value is : $b <hr>";

  // Here, the values will be swapped, but outside the function, the variables a and b still hold their original values.
  // To fix this bug, we will use call by reference in the next example.
}

$a = 10;
$b = 20;
swap($a, $b);
echo "Outside ";
echo "Variable a Value is : $a <br>";
echo "Variable b Value is : $b <br>";
echo "<hr>";
