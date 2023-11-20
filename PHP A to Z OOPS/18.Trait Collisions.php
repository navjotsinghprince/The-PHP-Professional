<?php
//It will override the methods of a class using a trait.

class BaseClass
{
	public function myfunc()
	{
		echo "Base class function running....\n";
	}
}

trait Hello
{
	public function myfunc()
	{
		echo "Hello Trait function running....\n";
	}
}

trait Hii
{
	public function myfunc()
	{
		echo "Hiii Trait function running....\n";
	}
}

class test extends BaseClass
{

	use Hello, Hii {
		/*It means that both traits have the same function, and here we have created a body for 'Hi' 
	so that it is defined that the 'myfunc' from the 'Hello' trait should be used instead of 'Hi'. This is done to avoid a collision between them.*/
		Hello::myfunc insteadof Hii;

		#It means that the 'myfunc' of the 'Hi' trait has been renamed to 'newhello', and now it will be called by this name.
		Hii::myfunc as newhello;
	}

	// public function myfunc(){
	// 	echo "This is Test Class Function Running...\n";  
	// }

	public function __construct()
	{
		$this->myfunc();
	}
}

$t = new test;
$t->newhello();
