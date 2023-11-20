<?php
for ($i=1; $i<=100; $i=$i+10) {
  for ($j=$i; $j<$i+10; $j++) {
    echo "<b> ".$j."</b>";
  }
  echo "<br>";
}
echo "<br><hr>";
?>

<?php
for ($i=1; $i<=5; $i++) { 
   for ($j=1; $j<=$i; $j++) { 
     echo $j;
   }
   echo "<br>";
}
echo "<hr>";


for ($i=1; $i<=5; $i++) { 
  for ($j=1; $j<=$i; $j++) { 
    echo $i;
  }
  echo "<br>";
}
echo "<hr>";
?>
