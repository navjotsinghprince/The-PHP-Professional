<?php
//This method is called when we attempt to access a private method from outside.

class student
{
	private $first_name;
	private $last_name;

	private function setName($fname, $lname)
	{
		$this->first_name = $fname;
		$this->last_name = $lname;
	}

	public function show()
	{
		echo $this->first_name;
		echo $this->last_name;
	}
	//The method named $methodname will be called, 
	//and the arguments that we passed to it will be available in the function as parameters.
	public function __call($methodname, $args)
	{
		#echo "This is Private Or Non-Existing method($methodname)";
		#print_r($args);
		if (method_exists($this, $methodname)) {
			call_user_func_array([$this, $methodname], $args);
		} else {
			echo "Method Does not Exist($methodname)";
		}
	}
}

$test = new student();

$test->setName("Navjot", "Singh");
print_r($test);

$test->show();
