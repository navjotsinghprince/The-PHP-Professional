<?php
echo "<pre></pre>";
$str1 = "i love php, we love php too!";
$str2 = "I lOVE PHP, we lOVE PHP! TOO";


//This function is meant for searching any word in a string and will return its position
//strpos(string,find,start);
//start = where to start 

echo "simple search word position is :" . strpos($str1, "love") . "<br>"; //first's love(case-sensitive)
echo "reverse search word position is :" . strrpos($str1, "love") . "<br>"; //second's love(case-sensitive)
echo "case insenstive search word position is : " . stripos($str2, "love") . "<br>";  //first php return 7(case-isensitive)
echo "case insenstive reverse search word position is : " . strripos($str2, "love") . "<br>"; //(case-isensitive)
