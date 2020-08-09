<?php

$a="Hello";
$b="Mahabharat";
$c="Ramayan";
$newArray=str_split($a);			//str_split(array,length);
$newArray2=str_split($b,2);
$newArray3=chunk_split($c,2,"..");	//chunk_split(array,length,string);

echo "This is the Demonstration for the function str_split";
echo "<pre>";
print_r($newArray);
echo "</pre>";


echo "<hr>";
echo "This is the Demonstration for the function str_split with 2nd parameter length";
echo "<pre>";
print_r($newArray2);
echo "</pre>";

echo "<hr>";
echo "This is the Demonstration for the function chunk_split";
echo "<pre>";
print_r($newArray3);
echo "</pre>";
?>