<?php

$string = "PHP is the web scripting phhhhhhhhhhhhhhhhhp language of choice";

/*
PHP is the web scripting phhhhhhhhhhhhhhhhhp language scipting of choice

s[a-z]*i==This is greddy match 'scipting' will be selected until the last 'i'. like 'scipting'
s[a-z]*?i===This is Lazy match selecting until the first 'i' in the word like 'scri'


<h1>PHP is the web scripting phhhhhhhhhhhhhhhhhp language scipting of choice.</h1>
<.*>  ===Select all string
<.*?>  ==Select only tags


<h1>PHP is the "web" scripting phhhhhhhhhhhhhhhhhp "language" scipting of choice.
".+" ==It will select from one inverted code to the last inverted code
".+?" ===Only what is inside the quotes will be selected


PHP is the "web" scripting phhhhhhhhhhhhhhhhhp "language" scipting of choice.
^\w+ ==only first word select
 will search on google ==only last word select not working


possible== (im)?possible select both layer
impossible


play ==play([a-z0-9]+)?  Select all characters after 'play'
player
played
playing
playin
play123


file.txt  ==file\w*\.(txt|xlsx|docx|pptx) Select all files
file1.txt
file20.docx
fileabce1.pptx

I like Toyeta and Honda
I like Toyeta and Honda and Toyeta
I like Toyeta and Honda and Honda

I like (Toyeta) and (Honda) and \1 == Calling the (Toyota) group using \1, so the second line will be selected

I like (Toyeta) and (Honda) and \2 == Calling the (Toyota) group using \2, so the third line will be selected


*/
