<?php
echo "<pre></pre>";
//This function is used to secure the code from MySQL injection.
$str = "hello 'i' m 'prince'";
echo "Simple String :=" . $str . "<br>";

$newstr = addslashes($str) . "<br>"; //add backslashes in front of each double quote
echo $newstr;

$new = stripslashes($newstr) . "<br>"; //remove backslashes from string
echo $new;

echo "<hr>";

//add a backslash in front of character
$t = "hello 'i' m 'navjot'";
$s = addcslashes($t, "a..z") . "<br>";   //means a to z tk like a,b,c,d,e,f etc.. to before like range of character
echo $s . "<br>";

$u = stripcslashes($s);
echo $u . "<br>";
