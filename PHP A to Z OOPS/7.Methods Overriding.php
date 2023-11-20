<?php
//Inherited methods can be overridden by redefining the methods (use the same name) in the child class.
//We can override function and its argument


class MySuperClass
{

	protected $name = "Navjot Singh is In Parent Class\n";

	function __construct()
	{
		echo "This is Parent Constuctor running.....\n";
	}

	function Myfunc($a)
	{
		echo "This is Parent Myfunc running.....\n";
	}
}


class MysubClass extends MySuperClass
{

	//if you don't want to override don't declare variable in child class in same name
	public $name = "Prince is in Child Class\n"; //Parent name property variable override


	function __construct()
	{ //constructor override :) 
		//First::__construct();  //overridding does not work parent will be call
		echo "This is Child Class Constuctor running.....\n";
	}

	public function Myfunc($a, $b = 1)
	{   //function override for prevent warning set default value of perameter :)
		//First::myfunc(); //overridding does not work parent will be call
		echo "Addition is" . ($a + $b);
	}
}

//if you want to use parent varibles,methods,constructors then use ::parent keyword
$test = new MysubClass();

echo $test->name;
$test->myfunc(10, 20);
