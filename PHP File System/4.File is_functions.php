<?php
//returns true or file

if (is_file("readme.txt")) {
	echo "Yes it is file<hr>";
} else {
	echo "it is not file<hr>";
}


if (is_dir("test")) {
	echo "Yes it is folder<hr>";
} else {
	echo "it is not folder<hr>";
}


if (is_writeable("readme.txt")) {
	echo "Yes it is writeable<hr>";
} else {
	echo "it is not writeable<hr>";
}

if (is_readable("readme.txt")) {
	echo "Yes it is readable<hr>";
} else {
	echo "it is not readable<hr>";
}

//check executable file or not 
if (is_executable("readme.txt")) {
	echo "Yes it is executable<hr>";
} else {
	echo "it is not executable<hr>";
}
