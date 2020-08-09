<?php

function ABC()
{
	$s=10;
	$f=45;
	$s1=110;
	$f1=415;
	echo "Hello ",$s ," " ,$f,$s1 ," " ,$f1;
}
ABC();

echo "<hr>";

function PQR($a,$b)
{
	echo "WOW !!!";
	echo "Amazing";
	echo "Nice<br>";
	echo $a + $b;
	
}
PQR(10,20);

echo "<br><hr>";
function MN($a='45',$b="15")
{
	echo "WOW !!!";
	echo "Amazing";
	echo "Nice<br>";
	echo $a + $b;
	
}
MN();
?>