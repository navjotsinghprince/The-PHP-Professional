<?php
$file = "readme.txt";

if (file_exists($file)) {
   //echo readfile("readme.txt")."<hr>";
   //echo readfile($file);

   //copy($file,"newfile.txt"); //create new file 

   //rename("newfile.txt","againnewfile.txt");

   //unlink("againnewfile.txt");
} else {
   echo "file does not exist";
}


/*-----------------------------------------------*/
if (!file_exists("textfiles")) {
   //mkdir("textfiles"); 
} else {
   echo "folder already exist";
}

if (file_exists("textfiles")) {
   rmdir("textfiles");
} else {
   echo "folder does not exist<hr>";
}

/*-----------------------------------------------*/
//Get file Information Functions
$file = "readme.txt";
echo "file size is : " . filesize($file) . "<br>";
echo "file type is : " . filetype($file) . "<br>";


//mkdir("test");
echo "file type is : " . filetype("test") . "<hr>";


/*-----------------------------------------------*/
//Check File Path Information
$file = "readme.txt";
echo realpath($file) . "<br>";


$path = realpath($file);
echo "<pre>";
print_r(pathinfo($path));
echo "<pre><br>";

echo "Access values Methods:---<br>";
echo $dirname = pathinfo($path, PATHINFO_DIRNAME) . "<br>";
echo $basename = pathinfo($path, PATHINFO_BASENAME) . "<br>";
echo $pathinfo = pathinfo($path, PATHINFO_EXTENSION) . "<br>";
echo $filename = pathinfo($path, PATHINFO_FILENAME) . "<hr>";


echo basename($path), "<br>";
echo basename($path, "txt") . "<hr>";

/*-----------------------------------------------*/
//Return parent directory 
echo dirname($path) . "<br>";
echo dirname($path, 2); //level 2 tk parent directory return
