<?php
//Both of these files contain classes with the same name, which we cannot include.
//Now, we will use namespaces so that we can include both classes with the same name and use their functions.

require "product.php";
require "testing.php";

function wow()
{
	echo "Wow From Index file\n";
}

#To call a function of a particular class, 
//$obj=new pro\Product();  
//$obj1=new test\Product();


// $obj->Myfunc();
// $obj1->Myfunc();

#Call Same name function from different-2 namespaces 
// wow();
// pro\wow();
// test\wow();

//we can make object of "\test\Product" and call its methods
//$obj=new pro\Product();



#Long Namespaces Usage:-
//$obj=new pro\version_1\command\myname3\Product();  

#If you need to create a large number of objects with long names, you can use this approach.
use pro\version_1\command\myname3 as mycmd;

$obj = new mycmd\Product();
