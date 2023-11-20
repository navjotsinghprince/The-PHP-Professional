<?php
//If we attempt to access any private property or a non-existing property, this method is automatically invoked.


#First Example----------------------
/*
class abc{
 private $name="Navjot Singh";

 public function __get($PropertyName){
	 echo "You Are Trying To access Non-Existing Or Private Property($PropertyName)";
 }

}
$test= new abc();
$test->name;
*/


class abc
{
	private $data = ["name" => "Prince", "course" => "PHP", "fee" => 10000];

	public function __get($key)
	{
		#echo "You Are Trying To access Non-Existing Or Private Property($PropertyName)";
		if (array_key_exists($key, $this->data)) {
			return $this->data[$key];
		} else {
			return "This Key($key) is not Defined";
		}
	}
}

$test = new abc();
//print_r($test->data);

echo $test->name;
echo $test->course;
echo $test->age;
