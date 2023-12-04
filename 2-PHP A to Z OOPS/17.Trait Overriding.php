<?php
//Methods Priority Level Check
//It will override the methods of a class.
//trait ko override ki class ka default same function override kr dega

class BaseClass
{
	public function myfunc()
	{
		echo "This is base class function running....";
	}
}

trait MyTrait
{
	public function myfunc()
	{
		echo "This is Trait function running....";
	}
}

class test extends BaseClass
{

	use MyTrait; //It will override the "myfunc" function of the BaseClass, and the function from the trait will be executed.

	public function myfunc()
	{ //And here, the function from the trait has been overridden.
		echo "This is Test Class Function Running";
	}

	public function __construct()
	{
		$this->myfunc();
	}
}

$t = new test;
