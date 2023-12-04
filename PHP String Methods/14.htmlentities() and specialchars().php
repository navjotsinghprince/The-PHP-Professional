<?php
echo "<pre></pre>";
//This function converts HTML special characters into HTML entities code
//htmlentities(string,flags);
//flags perameter values
//ENT_COMPAT = only double quotes encode
//ENT_QUOTES = single and double both quotes encode
//ENT_NOQUOTES = does not encode any quotes

$str1 = "A 'quotes' is ,<b>bold</b>";

echo "Simple String: " . $str1 . "<br>";  //view output on source code 
echo "<hr>";

//echo htmlentities($str1)."<br>";             //only single quotes  encode
//echo htmlentities($str1,ENT_QUOTES)."<br>"; //both single and double quotes encode

$encoded = htmlentities($str1, ENT_QUOTES);
//echo "encoded is ".$encoded."<br>";
//echo "decoded is ".html_entity_decode($encoded)."<br>";  //decode 
echo "<hr>";


$str2 = "<a href='https://google.com'>google</a>";
//This function encodes special characters like &, ", ', <, and >
//echo htmlspecialchars($str2)."<br>"; 

$encode = htmlspecialchars($str2, ENT_QUOTES);  //encode double quotes
echo "encoded is " . $encode . "<br>";
echo "decoded is " . htmlspecialchars_decode($encode) . "<br>";  //decode 
echo "<hr>";

//Now we are checking the encode list for testing purposes, which characters can this function encode
$arr = get_html_translation_table(HTML_ENTITIES);
echo "HTML_ENTITIES" . "<pre>";
print_r($arr);
echo "</pre>";
echo "<hr>";

$arr = get_html_translation_table(HTML_SPECIALCHARS);
echo "HTML_SPECIALCHARS" . "<pre>";
print_r($arr);
echo "</pre>";
echo "<hr>";
