<?php

$string = "PHP is the web scripting phhhhhhhhhhhhhhhhhp language of choice";

/*
PHP is the web scripting phhhhhhhhhhhhhhhhhp language of choice

ph*===select all h 
1   ===select all digits at once use \d* 
12
123
1234
12345

word===\d*word will select all
1word
22word
333word
4444word

word===\d+word It will only select those charcter which contains digit 'a'.
1word
22word
333word
4444word

file.php  ===file\d*.php  All files selected 
file1.php
file2.php
file456.php

file.php  ===file\d+.php  Only digit files selected
file1.php
file2.php
file456.php

o   ===oh*   All oh Selected
oh
ohh
ohhhhh
ohhhhhhh

o   ===oh+ Only o with h selected
oh
ohh
ohhhhh
ohhhhhhh

word   ====\d+word only digits words selected
1word
22word
333word
4444word

212-456-8789  ===\d+.\d+.\d+ Select phone number
212*647*4638
212-456-8789   ===\d+[-]\d+[-]\d+ Select phone number with hyphen


PHP is the web scripting phhhhhhhhhhhhhhhhhp language scipting of choice

scr?ipting== It will select both those containing 'r' and those without 'r'.

color====colou?r it will select both
colour

jan====jan(uary)? Select both in the grouping
january

August 22nd  ====Aug(ust)?\s22(nd)? ==select all dates
Aug 22
Aug 22nd
August 22


--------------------
o 
oh
ohhh
ohhhhh
ohhhhhh

oh{2}==t will select 'o' where 'h' appears twice.
oh{2,}===At least 2 'h' should be there, and all other 'h' should also be selected
oh{2,5}== should be 5 'h' after 'o'.


12000 
250000
7834
152272

\d{6,}==Select the salary where there are 6 digits.

*/
