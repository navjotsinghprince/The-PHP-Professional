<?php
//Inheritance in OOP = When a class derives from another class.
//inheritance and the Private Access Modifier
//We Will Access Private properties within sub class 

class MySuperClass
{

	private $country;
	private $state;
	private $city;
	private $pincode;

	function __construct($c, $s, $ci, $p)
	{
		echo "Parent Constructor Running......";
		$this->country = $c;
		$this->state = $s;
		$this->city = $ci;
		$this->pincode = $p;
	}

	function __destruct()
	{
		echo $this->country . "\n";
		echo $this->state . "\n";
		echo $this->city . "\n";
		echo $this->pincode . "\n";
	}
}

class MysubClass extends MySuperClass
{

	function __destruct()
	{
		parent::__destruct();   //now parant destructor will execute
		//private members can't access so i have to use parent destructor
	}
}

/*When an object is created, by default, the constructor/destructor of the child class is called. 
However, this behavior can be removed using the parent keyword.*/
$test = new MysubClass("India", "Punjab", "Ferozepur", 152004);



#=============================MORE HACKABLE UNDERSTANDING====================
/*class MySuperClass{
	private $myproperty;
	private $country;
	private $state;
	private $city;
	private $pincode;

	function __construct($c,$s,$ci,$p){
		$this->country=$c;
		$this->state=$s;
		$this->city=$ci;
		$this->pincode=$p;
	}

	// function __destruct(){
	// 	echo $this->country."\n";
	// 	echo $this->state."\n";
	// 	echo $this->city."\n";
	// 	echo $this->pincode."\n";
	// }

    //This function is breaking the inheritance barrier; 
    //it is accessing all private properties and methods in the derived class. 
	function unsecure($value){
		$this->Privfunc();
		$this->myproperty=$value;
		echo $this->myproperty;
	}

	protected function Myfunc(){
		echo $this->country."\n";
		echo $this->state."\n";
		echo $this->city."\n";
		echo $this->pincode."\n";
	} 

	private function Privfunc(){
		echo "I m Private function";
	}
}

class MysubClass extends MySuperClass{

	public function Subfunc(){
		$this->Myfunc();
	}

	function breaksec($val){
		parent::unsecure($val);   
	}

}

$test=new MysubClass("India","Punjab","Ferozepur",152004);
$test->breaksec("Navjot"); */
