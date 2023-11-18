<?php
//syntax=file_put_contents(filename,data,mode,context);
//contaxt==It is not necessary to specify whether the data was sent via POST or GET.

//old content will be override
//echo file_put_contents("readme.txt","this is testing");

echo file_put_contents("readme.txt", " \nthis is new text", FILE_APPEND | LOCK_EX);
