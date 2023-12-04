<?php

#preg_replace(pattern,replacement,string,limit);
#preg_split(pattern,string,limit,flags);
#preg_quote(string,delimeter);


/*
$string="PHP is the web scripting php language of choice";
$pattern="/PHP/i";
$replace="Javascript";
echo preg_replace($pattern,$replace,$string);
*/

/*
$string="<h1>PHP is the web scripting php language of choice</h1>";
$pattern="/<.+?>/i";  //remove starting or end tag
$replace=" ";
echo preg_replace($pattern,$replace,$string);
*/

/*
$string="May 26, 2019";
$pattern="/(\w+) (\d+), (\d+)/i";  
$replace="$1 20, $3";  //use doller$ intead of slashes
echo preg_replace($pattern,$replace,$string);
*/

/*
$string="{startdate} = 1999-5-10";
$pattern=array("/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/i");  
$replace=array("$4/$3/$1$2");
echo preg_replace($pattern,$replace,$string);
*/

/*
$string="{startdate} = 1999-5-10";
$pattern=array("/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/i","/^\s*{(\w+)}\s*=/");
$replace=array("$4/$3/$1$2","$1=");
echo preg_replace($pattern,$replace,$string);
*/

#===========================================================
//echo preg_quote("$5.99"); //It will append a backslash before the special character

//echo preg_quote("http://");
//echo preg_quote("http://","/");  //use delimeter

#===============================================================
/*
$string="PHP is the web scripting php language of choice";
//remove the space and return an array
//$split=preg_split("/[\s]+/",$string);
$split=preg_split("/[\s]+/",$string,3); //give limit parameter 
print_r($split);
*/

/*
$string="PHP is the web scripting php language of choice";
$split=preg_split("/(web|of)/",$string);  
print_r($split);
*/

#Real World Use
/*
$string="https://www.navjotsinghprince.com/folder/file.php";
$split=preg_split("/\//",$string); //remove the slash and create an array.
print_r($split);
*/

/*
$string="https://www.navjotsinghprince.com/folder/file.php";
$split=preg_split("/\//",$string,-1,PREG_SPLIT_NO_EMPTY);
//-1 means it will return the array as it is
//PREG_SPLIT_NO_EMPTY==space will be removed
print_r($split);
*/

/*
$string="https://www.navjotsinghprince.com/folder/file.php";
$split=preg_split("/\/\//",$string);
//ab 2 //create an index by removing slashes
print_r($split);
*/

//Wherever the string was broken to create an array, what is its offset
$string = "php hypertext language programming";
$split = preg_split("/ /", $string, -1, PREG_SPLIT_OFFSET_CAPTURE);
print_r($split);
