<?php
echo "<pre></pre>";
//The real power of PHP comes from its functions.
//PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.


function Prince() //function definition
{
  echo "my name is prince<br>";
  echo "i'm learning php<br>";
  echo "thankyou :)<br>";
}

Prince(); //function call
Prince();
Prince();
echo "<h2>" . "this is function testing" . "</h2><hr>";
Prince();
echo "<hr>";

//Nested Functions 
function MyFunc()
{
  echo "I m Parent Statement ";
  function MyFunc2()
  {
    echo "I m Child Statement ";
  }
  MyFunc2();
}
MyFunc();
