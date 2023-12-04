<?php
//It will directly enter and print the value without checking the condition the first time.
//It will definitely run at once.

$itreation = 10; //loop itreation times 

$num = 1;
do {
  echo "10" . "*" . $num . "=" . (10 * $num) . "\n";
  $itreation--;
  $num++;
} while ($itreation >= 1);
