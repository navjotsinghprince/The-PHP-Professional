<?php

/**********
function calls itself is called recursive function
 ******/

function Fact($n)
{
  if ($n == 0) {
    return 1;
  } else {
    return $n * fact($n - 1);
  }
}
echo "Factorial oF 5 is : " . fact(5);
