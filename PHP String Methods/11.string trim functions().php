<?php
echo "<pre></pre>";
//Remove characters from both sides
//trim = It means trimming from the edges."
//To remove the spaces that have occurred on the left and right sides, 'trim' is used.
//mainly used in form
//trim(string,charlist)
//charlist=which character to be delete  

$str = "prince ferozepuria";

echo trim($str, "p") . "<br>";   //p will be deleted
echo trim($str, "pria") . "<br>";   //nce ferozepu

echo rtrim($str) . "<br>";    //delete value from right side and right whitespace
echo ltrim($str, "p") . "<br>";    //delete valyue from left side and left whitespace
echo chop($str, "a") . "<br>";   //same works as rtrim 
