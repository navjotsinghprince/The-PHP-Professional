<?php
$dir=".";

if(is_dir($dir)){ //check directory exists or not

  if($d=opendir($dir)){  //open directory 

  while($file=readdir($d)){    //read directories files
	  echo "FILENAME : ".$file."<br>";
    }
  }
  closedir($d);  //close directory
}

?>