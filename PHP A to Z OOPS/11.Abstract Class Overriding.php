<?php
//Now, in the child class, override the abstract class's function by adding an extra parameter.
//The child class may define optional arguments that is not in the parent's abstract method

abstract class baseclass
{
	public $firstname = "Programmer";
	public $lastname;
	public $age;

	abstract protected function setdata($f, $l);  //not declare age parameter
	abstract protected function getdata();
}

class student extends baseclass
{
	public function setdata($f, $l, $a = 20)
	{   //optionl parameter must have default value 
		$this->firstname = $f;
		$this->lastname = $l;
		$this->age = $a;
	}

	public function getdata()
	{
		return "your first name is : ={$this->firstname}<br>
		your last name is :={$this->lastname}<br>
		and your age is :={$this->age}<br>";
	}
}

echo "<pre></pre>";  //formatting set

$obj1 = new student();
$obj1->setdata("Navjot", "Singh");
echo $obj1->getdata();
