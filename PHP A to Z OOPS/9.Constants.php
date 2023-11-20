<?php
//constants cannot change once it was declared
//Constants in a class are declared using the const keyword.
//constants are case senstive.So recommended name UPPERCASE letters

class super
{
	const MYLEAVING_MSG = "thank you for writing code!";

	public function bye()
	{
		echo self::MYLEAVING_MSG . " Inside Class accessing\n";
	}
}

echo super::MYLEAVING_MSG . " Outside Class accessing\n";


$obj = new super;
$obj->bye();
