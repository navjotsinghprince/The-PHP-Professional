<?php
echo "<pre></pre>";

$str = "PrinceFerozepuria";
$newstr = strrev($str);  //Reveres a string
echo $newstr;
echo "<br>";

//Randomly shuffles all the characters of a string when when page refresh

//It will run each time the page is refreshed
$newstr = str_shuffle($str);
echo $newstr;
echo "<br>";
