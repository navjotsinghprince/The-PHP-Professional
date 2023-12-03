<?php
echo "<pre></pre>";
//strstr(string,search,before_search);
//before_search contains two values: true and false 
//true= If 'true' is provided, it will return the left side string
//This function will return the remaining part after searching for any word

$str = "hello friend,this world is nice!";

echo strstr($str, "friend") . "<br>";

echo "left wala part: " . strstr($str, "friend", true) . "<br>";

echo stristr($str, "friend", true) . "<br>"; //same work strstr

echo strchr($str, "friend", true) . "<br>";  //same work strstr

echo strrchr($str, "friend") . "<br>";

//This function, upon encountering the first 'o' or 'e', will return the subsequent characters
echo strpbrk($str, "oe") . "<br>";
