<?php

$fruits=array(1=>"banana",2=>"mango",3=>"kevi",5=>"Apple");
$veggi=array(1=>"pea",2=>"fenugreek",4=>"corindar","mango",5=>"Apple");

$newArray=array_intersect($fruits,$veggi);

echo "This is the intersection of values....";
echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<hr>";
$newArray1=array_intersect_key($fruits, $veggi);

echo "This is the intersection of key....";
echo "<pre>";
print_r($newArray1);
echo "</pre>";

echo "<hr>";
$newArray2=array_intersect_assoc($fruits, $veggi);

echo "This is the intersection of both key and values....";
echo "<pre>";
print_r($newArray2);
echo "</pre>";



?>