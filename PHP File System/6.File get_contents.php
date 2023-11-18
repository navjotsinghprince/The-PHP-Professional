<?php
//syntax=file_get_contents(filename,include_path,context,start,max_length);
//contaxt==It is not necessary to specify whether the data was sent via POST or GET.

echo file_get_contents("readme.txt", FALSE, NULL, 0, 50) . "<hr>"; //It will return characters from position 0 and length 50

echo file_get_contents("readme.txt", FALSE, NULL, 50); //It will return all characters from position 50 onwards.
