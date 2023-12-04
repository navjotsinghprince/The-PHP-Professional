<?php
//This function is called when we set the value of a private property from outside.

class abc
{
	private $name;

	public function __get($PropertyName)
	{
		echo "You Are Trying To access Non-Existing Or Private Property($PropertyName)";
	}

	public function __set($propertyname, $value)
	{
		#echo "This is Non-Existing and private property($property)";
		if (property_exists($this, $propertyname)) {
			$this->$propertyname = $value;
		} else {
			echo "Property Does Not Exist($propertyname)";
		}
	}
}

$test = new abc();

echo $test->name = "Navjot Singh";
