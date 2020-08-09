<?php

$a=[1,2,3,4];
$b=[5,6,7,8];

$newArray=array_map("myfunction",$a,$b);

function myfunction($value,$key)
{
	echo $key." ".$value." ";
}


?>