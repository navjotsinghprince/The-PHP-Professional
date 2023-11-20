<?php
//Using the functionality of one class in another class is called inheritance.

class computer
{
	public $name;
	public $model;
	public $price;
	public $processor;

	function __construct($n, $m, $p, $pro)
	{
		$this->name = $n;
		$this->model = $m;
		$this->price = $p;
		$this->processor = $pro;
	}
}

//For Simple words Now, the NewComputer class has copied all the code from the Computer class into itself.
class newcomputer extends computer
{
	public $processor;

	// function __construct($pro){  //This function will override the constructor of the parent class.
	//  $this-> processor=$pro;
	// }
}

$laptop = new newcomputer("lenovo", 2023, 90000, "i9");
echo "<pre>";
print_r($laptop);
echo "</pre><hr>";


echo "laptop name is :" . $laptop->name . "<br>";
echo "laptop model is :" . $laptop->model . "<br>";
echo "laptop price is :" . $laptop->price . "<br>";
echo "laptop processor is :" . $laptop->processor . "<br>";
