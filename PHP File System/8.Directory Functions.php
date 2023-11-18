<?php
//Gets the current working directory
echo getcwd()."<br>";

//chdir("css"); //The new current directory Change directory
//echo getcwd();

//$dir=".";  //represent current folder
//$dir="..";  //All files in the main folder outside the current folder.
$dir="js/";
//return all directories into an array

echo "<pre>";
print_r(scandir($dir,1));  //now result will show descanding order 
echo "<pre>";
?>