<?php
echo "<pre></pre>";

$var = "navjotsinghprince's \website";
$var = 'navjotsinghprince"s \website';

echo filter_var($var, FILTER_SANITIZE_MAGIC_QUOTES); //add slashs 
echo "<hr>";

///===================================================================
//$var="<h1>navjotsinghprince website</h1>";
$var = "<h1>navjotsinghprince & website</h1>";
//echo filter_var($var,FILTER_SANITIZE_STRING,FILTER_FLAG_ENCODE_AMP); //convert special characters to entity codes

//go to rapidtable.com and remove special characters (Note: FILTER_SANITIZE_STRING , check your supported php version)
echo filter_var($var, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);  //remove sepecial charcaters 
//echo filter_var($var,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW);   //0 to 32 characters target
echo "<hr>";


//=============================================================
$var = "<h1>navjotsinghprince's & \website</h1>";
//echo filter_var($var,FILTER_SANITIZE_ENCODED); //save encoded form charcters space,graterthan,lessthan sign

//echo filter_var($var,FILTER_SANITIZE_ENCODED,FILTER_FLAG_STRIP_HIGH); //remove special charcters

//echo filter_var($var,FILTER_SANITIZE_ENCODED,FILTER_FLAG_STRIP_LOW); //remove special charcters 0 TO 32 RANGE

echo filter_var($var, FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH);
echo "<hr>";

//=============================================================
$var = "<h1>navjotsinghprince's & \website</h1>";

echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
//COVERTS TO ENTITY CODES 
