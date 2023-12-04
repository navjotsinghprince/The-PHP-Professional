<?php

echo "PHP is an acronym for PHP: Hypertext Preprocessor<br>";
echo "PHP is a widely-used, open source scripting language<br>";
echo "<PHP scripts are executed on the server<br>";
echo "PHP is free to download and use<br><br><hr>";

echo "<pre>What is a PHP File?<br>
PHP files can contain text, HTML, CSS, JavaScript, and PHP code<br>
PHP code is executed on the server, and the result is returned to the browser as plain HTML<br>
PHP files have extension .php</pre><br><hr>";

echo "<h2>What Can PHP Do?</h2><br>
PHP can generate dynamic page content<br>
PHP can create, open, read, write, delete, and close files on the server<br>
PHP can collect form data<br>
PHP can send and receive cookies<br>
PHP can add, delete, modify data in your database<br>
PHP can be used to control user-access<br>
PHP can encrypt data<br>

With PHP you are not limited to output HTML. You can output images, PDF files, and even Flash movies. You can also output any text, such as XHTML and <br>";
echo "<hr>";
echo 'A PHP script starts with <?php and ends with ?>';
echo "<hr>";

//All three echo statements below are equal and legal:
echo "Hello World!<br>";
echo "Hello World!<br>";
echo "Hello World!<br>";
echo "<hr>";

echo "<h2>PHP is Fun!</h2>";                     //use single tag
echo "<h3><i>Using:" . "Multiple Tags </i></h3>";  //use multiple tag
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.<br>";
echo 'This is echo statement using single quotes<br>';
echo "HTMl5" . "CSS3" . "This is String concatination<br>";  //string concatination
echo 6457.645764 . "<br>";                                //number value
echo "6457645764";                                      //string value


// This is a single-line comment
# This is also a single-line comment


/*
This is a multiple-lines comment block
that spans over multiple
lines

*/


$x = 5/*15*/ + 5;
$num = 911234567890;
echo "<h2>" . $x . "</h2><br>";
echo "This is my number : " . $num;
/*difference between commas(,) and dot(.)*/
//By adding commas, different values will be obtained separately.
//By adding dots, it will become a single value.

//echo vs print
/*echo faster than print*/
/*echo has no return value*/
/*print has  return value=1*/
