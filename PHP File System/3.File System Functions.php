<?php

// $file=fopen("readme.txt","r+");
// $file=fopen("readme.txt","w+");
$file = fopen("readme.txt", "a+"); //It will append the content at the end.

//fwrite($file,"\nHere is new line");
//fputs($file,"\nHere is new line"); //same as fwrite

//It will retain a content of 100 characters and remove the rest.
ftruncate($file, 100); //


//To close the file after performing operations on it.
fclose($file);
