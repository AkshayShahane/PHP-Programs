<?php

$a="Hello World";
$ar=strlen($a);
echo "length of string is ".$ar."<br>";

$b=str_word_count($a);

echo "words are ".$b."<br>";

$c=substr_count($a, "World");

if($c==1)
{
	echo "Substring Found...";
}
else
{
	echo "Substring Not Found...";
}
?>