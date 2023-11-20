<?php
/*
if you create a __construct() function PHP will automatically call this function when you create an object from a class

When we create an object of a class, this is automatically called by default.

If a child class has a constructor, and you want to call the constructor of the parent class, 
you can use the scope resolution operator parent:: 
This allows you to explicitly specify that you want to call the constructor from the parent class. 
*/

class details
{
	public $name;
	public $age;
	private $city;
	protected $mobile;

	function __construct($n, $a, $c, $m)
	{
		$this->name = $n;
		$this->age = $a;
		$this->city = $c;
		$this->mobile = $m;
		$this->display();  	 //This will also be called automatically.
	}

	public function display()
	{
		echo $this->name . " ";
		echo $this->age . " ";
		echo $this->city . " ";
		echo $this->mobile . " ";
	}
}

$mydata = new details("prince", 20, "fzr", "8360909354");  //passing values to constrcutor
