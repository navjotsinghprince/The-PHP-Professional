<?php
echo "<pre></pre>";
//To comapre strings
$s1 = "hello my name is prince";
$s2 = "HELLO i have a lots of girlfriends ";

//result 0  means strings are equal
//result < 0 means $s1 less than $s2      result will be shown negative value
//result > 0  means $s1 greater than $s2  result will be shown postive value

echo strcmp("hello world", "hello world") . "<br>";  //0
echo strcmp("hello", "hello world") . "<br>"; //-6
echo strcmp("hello world", "hello") . "<br>"; //6

echo strncmp("helloworld", "helloworldhello", 6) . "<br>"; //third parameter specifies the number of character from each string used in the comparison

echo strcasecmp("hello", "HELLO") . "<br>"; //return 0 Both strings are Equal (case insentive) 
echo strncasecmp("helloworld", "HELLOWORLDHELLO", 5) . "<br>";

echo "<HR>";


//NATURAL ALGORITHM COMPARISON
echo strnatcmp("2helloworld", "2helloworld") . "<br>"; //compare two strings(case-sensitive)
echo strnatcasecmp("3helloworld", "2HELLOWORLD") . "<br>"; //compare two strings(case-insensitive)
echo "<HR>";

//substr(string1,string2,startpos,length,case);
echo substr_compare("helloworld", "world", 5) . "<br>";
echo substr_compare("helloworld", "world", 0, 3, true) . "<br>";
echo "<HR>";


//To find similar words 
//This will determine the how much percentage of matching letters in both strings
$s1 = "hello my name is prince";
$s2 = "HELLO i have lots of names";
similar_text($s1, $s2, $per);
echo $per;
