<?php
//object oriented programming language
//every single thing is object like laptop
//object has attributes(properties/variables) and behavior(methods/functions)
//oops use for reuseable code in again and again

class mobile //class define
{
	public $model = "nokia";   //variable define
	public $price = 12000;

	function increaseprice()
	{                             //methods define
		echo "Before Increzing Price Is= " . $this->price . "\n";
		echo "After Increzing Price Is=" . $this->price += 999;  //this keyword refers to object //means 12000+999=12999
		echo "\n";
	}

	function decreaseprice()
	{
		$this->price -= 999; //means 12000-999	
		return true;
	}
} //class created successfully

$smartphone = new mobile;  //now we are using class use of its object

echo "smartphone price is : " . $smartphone->price . "\n";
echo "smartphone model is : " . $smartphone->model . "\n";       //access property model coz it is public

$smartphone->model = "oneplus+";            //modify override property model
echo "new changed smartphone model is : " . $smartphone->model . "<hr>";

$smartphone->increaseprice();   //using class methods using objects
echo $smartphone->price;
echo "<hr>";


echo "\n";
$smartphone->decreaseprice(); //means 12999-999=12000
echo $smartphone->price;
