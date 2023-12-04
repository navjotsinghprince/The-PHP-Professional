<?php
echo "<pre></pre>";
//Encrypted password saved
//md5 = message digest_algorithm
//Basically, this function converts a string (password) into a 32-character hexadecimal or a 16-character binary format.
//md5(string,raw)
//raw 2 parameter TRUE OR FALSE
//TRUE = 16 character binary format
//FALSE = 32 character hex format 


$password = "prince";
echo md5($password, false) . "<br>"; //convert hex format password
echo md5($password, true) . "<br>"; //convert binary format password
echo "<hr>";



//sha1 US secure hash algorithm
$password1 = "prince";
echo sha1($password1, false) . "<br>";     //convert hex format password
echo sha1($password1, true) . "<br>";     //convert binary format password
echo "<hr>";
