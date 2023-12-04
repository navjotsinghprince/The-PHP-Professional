<?php
//Visit this site =>  https://regex101.com/


$string = "PHP is the web scripting language of choice";

//$exp=preg_match("/PHP/",$string); // match found
//$exp=preg_match("/php/",$string);  //match not found
//$exp=preg_match("/php/i",$string);  //match found case insentive

/*
$string="PHP is the web php scripting language of choice";
$exp=preg_match_all("/pHp/i",$string,$array); //match found with array
print_r($array); //how many terms found
*/

/*
$string="PHP is the web scripting language of choice";
$exp=preg_match_all("/pHp|web|The/i",$string,$array);
print_r($array); //how many terms found
echo $array[0][0]; //print first term
echo $array[0][1];  //print second term
*/

/*
$string="PHP is the web scripting  344 language 7888 of choice";
$exp=preg_match_all("/w|344|9|i/i",$string,$array); //search single charcter and numaric numbers
print_r($array); //how many terms found
echo $array[0][0]; //print first term
echo $array[0][1];  //print second term
*/

$string = "PHP is the web scripting  344 language 7888 of choice";
//$exp=preg_match_all("/[wo4]/i",$string,$array); //search all those charcter and 4 numbers ,,find each character one by one.

//$exp=preg_match_all("/[^wo4]/i",$string,$array); //caret operator , It will return all characters except for these [^wo4]

//$exp=preg_match_all("/[a-d]/i",$string,$array);  //It will return all characters from 'a' to 'd'
//$exp=preg_match_all("/[A-D]/",$string,$array); 

//$exp=preg_match_all("/[a-dA-D]/",$string,$array); //From 'a' to 'd', inclusive of both upper and lower case

//$exp=preg_match_all("/[0-9]/",$string,$array); //To find numaric range

//$exp=preg_match_all("/[^0-7]/",$string,$array); //Excluding the numbers between 0 and 7. 

//$exp=preg_match_all("/[^a-j]/",$string,$array); //Excluding the range from 'a' to 'j'

$exp = preg_match_all("/[a-d0-5]/i", $string, $array); //Only those characters that are between 'a' to 'd' and '0' to '5'


print_r($array); //how many terms found

if ($exp) {
	echo "A Match was Found";
} else {
	echo "A Match was Not Found";
}

/*****************ONLINE ***********************************
file1 file2 file3 file# file? file5 file6 this is string

file[123]==select 1 2 3 file 
file[1-3] ===select 1 to 3 files
file[^1-3]===select all other fiels which is not range in 1-3

-------------------------------------------
2015 2016 2017 2018 2019 2020
201===select all years
201[0-9]==select multiple years which range in 1-9

---------------------------------------
PHP is the web scripting language of choice
bat cat mat rat sat 

w[a-j]b==web will be select
w[abced]b===web will be select
[bc]at===bat cat will select
[^bc]at===mat rat cat select
a-z]at===all characters will be select

----------------------------------------------
Meta charcter search
PHP is the web scripting language o_f choi-ce
\w===all charcter will be select instead of -hyphen
\W===space hyphen dot questionmark select all special charcters
\d==select all numaric values 
\D====select all others charcters instead of numaric values 
\s===all whitespaces will select
\S===selct all others charcters instead of white spaces 
\?==Question mark will be select selct +- )( ) sign etc use very important hai ye
\bi\b ===boundary selecter only single i will select 
\bweb\b==single web will be select 
\b2020\b==select only 2020 year

\i=== all i will be select 
.==select all single charcters
ph.==All characters coming after 'ph' will be selected
sc.......===select scripting word
.eb==tarting is not known, but 'eb' is coming

https\:\/\/www\.navjotsinghprince\.com\/folder\/file\.php===Select this URL https://www.navjotsinghprince.com/folder/file.php

SUPPOSE STRING =file.txt file2.txt file#txt file txt
file\.txt===Select only file.txt

this is \na car===this is 
a car  select this is car with next line

this is a\tcar ===Select with Tab this is a		After pressing tab following 'a'.

this is a\ncar another\vtext===select vertical tab
this is a
car another
text


 */
