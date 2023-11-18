<?php
$file = fopen("readme.txt", "r"); //only read only
//echo fread($file,10); //only 100 charcters read including space
//echo fread($file,filesize("readme.txt"));  //read complete file



// echo fgets($file)."<br>"; //read first single line cursor will go last position
// echo ftell($file); //return cursor postion
// echo fgets($file);
// echo ftell($file)."<hr>";


// fseek($file,50); //set cursor position
// echo fgets($file);
// echo ftell($file)."<br>";
// echo fpassthru($file)."<hr>"; //Return the remaining file content.


//It will read the file from the position where it was left off.
// echo fgets($file);
// echo ftell($file)."<br>";
// rewind($file);
// echo "<br><br>".fgets($file);


//To read each line one by one.
//Until the end of the file is reached, the loop will continue.
// echo "<ul>";
// while(!feof($file)){
// $line=fgets($file);
// echo "<li>".$line."</li>";
// }
// echo "<ul>";

//To read each character one by one.
//The cursor will move forward each time the function is called.
// echo fgetc($file);
// echo ftell($file);  //return cursor position
// echo fgetc($file);
// echo ftell($file);


//It will convert all the lines present in the readme.txt file into an array.
echo "<pre>";
print_r(file("readme.txt"));
echo "</pre>";
