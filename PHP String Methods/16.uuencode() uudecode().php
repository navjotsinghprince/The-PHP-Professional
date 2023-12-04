<?php
echo "<pre></pre>";
//To save a message in a secret manner in the database.
//This function is also used to securely send a message in encrypted form

//$str = "prince";
$str = "Here are database credentials details.";
echo convert_uuencode($str) . "<br><br>";

$newstr = convert_uuencode($str);     //encrypted 

echo convert_uudecode($newstr) . "<br>";  //decrypted 
