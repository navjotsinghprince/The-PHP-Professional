<?php
//Multiple Validation and senitization
//filter_var_array(Data array,Filter array);

$formvalues = array(
	"stname" => "<h1>Navjot Singh</h1>",
	"stmarks" => "155",
	"stemail" => " nav  //jotsinghprince1@gmail.com"
);


$filter = array(
	"stname" => array(
		"filter" => FILTER_SANITIZE_STRING,
		"flags" => FILTER_FLAG_STRIP_HIGH
	),

	"stmarks" => array(
		"filter" => FILTER_VALIDATE_INT,
		"options" => array(
			"min_range" => 1,
			"max_range" => 100
		)
	),

	"stemail" => FILTER_SANITIZE_EMAIL
);

echo "<pre>";
print_r(filter_var_array($formvalues, $filter));
echo "</pre>";
