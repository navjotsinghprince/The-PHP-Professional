<?php
//To fix user's wrong enteries and mistakes with filter sanitization.

echo "<pre></pre>";
//==============WITH EMAILS==============Try all examples below
$var = "prince(.singh)@gma//il.com";
//$var="(prince.singh@gma//il.com)";
//$var="(prin   ce.singh@gma//il.com)";
//$var="(prince.singh@gma//il/com)"; 

$var = filter_var($var, FILTER_SANITIZE_EMAIL);

if (filter_var($var, FILTER_VALIDATE_EMAIL)) {
	echo "$var ====This Is Valid<br>";
} else {
	echo "This is Not Valid<br>";
}
echo "<hr>";


//===========WITH URLs ==============================
$var = "https://navjotsingh  prince.com";

$var = filter_var($var, FILTER_SANITIZE_URL);

if (filter_var($var, FILTER_VALIDATE_URL)) {
	echo "$var ====This Is Valid<br>";
} else {
	echo "This is Not Valid<br>";
}
echo "<hr>";



//==========WITH INT NUMBERS====================================
//$var="45";
//$var="45.34";
//$var="45./^^^abc";
//$var="-45";
//$var="+45";
$var = "45-";  //now invalid hoga

$var = filter_var($var, FILTER_SANITIZE_NUMBER_INT);

if (filter_var($var, FILTER_VALIDATE_INT)) {
	echo "$var ====This Is Valid<br>";
} else {
	echo "This is Not Valid<br>";
}
echo "<hr>";

//==========WITH FLOAT NUMBERS=================================
$var = "-45.34";  //remove decimals if use flags
//$var="45./^^^abc";
//$var="-80.23abc&!";
//$var ="15,00,00";
//$var ="80E";


//$var=filter_var($var,FILTER_SANITIZE_NUMBER_FLOAT); //decimal will be remove

$var = filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION); //print with decimal 45.34

//$var=filter_var($var,FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_THOUSAND); //print 1,50,000

//$var=filter_var($var,FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_SCIENTIFIC); //print 80E

if (filter_var($var, FILTER_VALIDATE_FLOAT)) {
	echo "$var ====This Is Valid float <br>";
} else {
	echo "$var ====This is Not Valid float <br>";
}
echo "<hr>";
