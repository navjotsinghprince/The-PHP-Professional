<?php
/*A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:*/

//You can have local variables with the same name in different functions, because local variables are only recognized by the function in which they are declared.

function myTest() {
  $x = 5;    //local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>