<?php

$a=array(
	array(1,"Rohan","Manager",25000),
	array(2,"Tushar","Employee",25000),
	array(3,"Sidhant","Employee",25000),
	array(4,"Pramod","Employee",25000)
);

echo "<pre>";
print_r($a);
echo "</pre>";
echo "<hr>";

foreach($a as $key=>$val1)
{
	foreach ($val1 as $val2) {
		echo "  ".$val2;
	}
	echo "<br>";
}
echo "<hr>";

$b=array(
	"rocky"=>array(1,"Rohan","Manager",25000),
	"tushy"=>array(2,"Tushar","Employee",25000),
	"sid"=>array(3,"Sidhant","Employee",25000),
	"pramya"=>array(4,"Pramod","Employee",25000)
);
foreach($b as $key2=>$val3)
{
	echo $key2." => ";
	foreach ($val3 as $val4) {
		echo "  ".$val4;
	}
	echo "<br>";
}
echo "<hr>";
?>