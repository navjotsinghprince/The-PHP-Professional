<?php
//return all folders and files into an array 

//echo "<pre>";
// print_r(glob("*"));
// print_r(glob("css/*"));  //fiels inside css
// print_r(glob("*.php"));  //all php files 
// print_r(glob("*.txt"));  //all txt files
// print_r(glob("t*"));     //starting with t name
// print_r(glob("in*"));    //starting with in
// print_r(glob("*est*"));  //between est 
// print_r(glob("t*t"));    //starting with t and ends with t
// print_r(glob("[nt]*"));  //starting with s and t
// print_r(glob("*[sys]*"));  //between s aur t
// print_r(glob("css/b*"));   //inside css folder starting with b
//echo "</pre>";


$ary = glob("*");
echo "<pre>";
foreach ($ary as $filename) {
	//echo "{$filename}" .filesize($filename)."<br>";
	echo "{$filename}== PATH IS ==: " . realpath($filename) . "<br>";
}
echo "</pre>";


echo "<pre>";
print_r(glob("*", GLOB_MARK)); //all folders with slash\
print_r(glob("k*", GLOB_NOCHECK)); //with not found print as it is pattern
print_r(glob("*", GLOB_ONLYDIR)); //only folders name return
print_r(glob("{*.php,*.txt}", GLOB_BRACE)); //use multiple patterns 
print_r(glob("{css/*,js/*,test/*}", GLOB_BRACE)); //css folder and js and test folders searching
echo "</pre>";
