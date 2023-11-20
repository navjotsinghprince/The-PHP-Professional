<?php
echo "<pre>";

//"GetOut" is a label; when the if condition becomes true, the execution will jump to the label. 
//The code between the "goto" statement and the code preceding the label will not be executed.

for ($i = 1; $i <= 10; $i++) {
  if ($i == 5) {
    goto GetOut;
  }
  echo "Number is  " . $i . "<br>";
}

GetOut:  //label defined 

echo "<h3>" . "Loop terminated coz' goto  Getout label is running" . "</h3>";
