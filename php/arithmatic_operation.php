<?php

$a=10;
$b=20;

$c=$a+$b;
echo $c."<br>";
$c=$a-$b;
echo $c."<br>";
$c=$a*$b;
echo $c."<br>";
$c=$a/$b;
echo $c."<br>";
$c=$a%$b;
echo $c."<br>";

echo "<hr>";
$a+=$b;
echo "<br>";
echo $a;
$a-=$b;
echo "<br>";
echo $a;
$a*=$b;
echo "<br>";
echo $a;
$a/=$b;
echo "<br>";
echo $a;

echo "<hr>";

$x=25;
$y=6;
if($x == $y)
	echo "Equals";
else
	echo "Not Equals";

echo "<hr>";
if($x === $y)
	echo "Equals and same data type";
else
	echo "Not Same Data type";

echo "<hr>";

if($x <> $y)
	echo "True";
else
	echo "False";

echo "<hr>";

if($x !== $y)
	echo "Not Equal value not equal data type";
else
	echo "False";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y
  

 $x = 1;  
$y = 10;

echo ($x <=> $y);
?>