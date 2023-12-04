<?php

trait Hello
{
	private function Myfunc()
	{
		echo "I m From Hello Trait Private function\n";
	}
}

class base
{
	use Hello {
		#It means that inside the trait, the 'Myfunc' function, which was initially private, has now been redefined as public. It has become public now.
		Hello::Myfunc as public;

		#it means that it has also been renamed like: 'wow'.
		Hello::Myfunc as public wow;
	}
}

$obj = new base();

$obj->Myfunc();
$obj->wow();
