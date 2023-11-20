<?php
//If self is present, it will print the "Prince From Parent Class\n", that property of the inherited class for the variable $name.
//And it should be such that if an object of the derived class is created, it should only print its $name property.
//For this, we will use the static keyword instead of self.

class base
{
	protected static $name = "Prince From Parent Class\n";

	public function myFunc()
	{
		echo static::$name;
		//echo self::$name;
	}
}

class derived extends base
{
	protected static $name = "Navjot From Child Class\n";
}

$obj1 = new base();
$obj2 = new derived();

$obj1->myFunc();
$obj2->myFunc();
