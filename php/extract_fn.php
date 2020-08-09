<?php
$a='coconut';
$color=['a'=>'red','b'=>'orange','c'=>'green'];

extract($color,EXTR_SKIP);
echo "<h1>Value of a is $a <br></h1>";
echo "Value of b is $b <br>";
echo "Value of c is $c <br>";

echo('<hr>');

$first=21;
$second=22;
$third=23;

$newArray= compact('first','second','third');
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>