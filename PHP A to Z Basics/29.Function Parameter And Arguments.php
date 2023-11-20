<?php

/*****
function FunctionName(parameter1,parameter2){
statements
return ;  value
}
 */
function sum($math, $eng, $com) //perameter
{
  $sum = $math + $eng + $com;
  return $sum;
}

function persentage($value)
{
  $p = $value / 450 * 100;
  return $p;
}

$total_numbers = sum(100, 100, 128); //argument
echo "Total Marks are : $total_numbers <br>";

$per = persentage($total_numbers);
echo "Persentage is  : $per <br>";
