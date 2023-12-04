<?php
echo "<pre></pre>";

$str = "hello <b>bold</b>,hello <i>prince</i>";
//when print it will removes tags from string.
//strip_tags(strip,allow)
//allow =Which tags would you like to allow, and which tags should be removed.

echo strip_tags($str) . "<br>";  //view on open source
echo strip_tags($str, "<b>") . "<br>";  //only b tag allow

//wordwrap To wrap after every 4 characters:
// 4 = How many words do you want to break after 
//<br> = Which tag to used for break  
$msg = "prince this world is beautiful";
echo wordwrap($msg, 4, "<br>", false) . "<br>";
echo "<hr>";
echo wordwrap($msg, 4, "<br>", true) . "<br>";
