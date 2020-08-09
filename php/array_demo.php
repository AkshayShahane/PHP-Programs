<?php

$a=array("red","green","yellow");
echo "Printing array element by passing index...<br>";
echo $a[1];
echo "<hr>";

echo "<pre>";
print_r($a);
echo "</pre>";

echo "<hr>";
for($i=0;$i<=3;$i++)
{
	echo "<h1>".$a[$i]."</h1>";
}

echo "<hr>";
$p=["kevi","banana","mango","Strawberry"];
echo "<pre>";
print_r($p);
echo "</pre>";
echo "<hr>";

?>