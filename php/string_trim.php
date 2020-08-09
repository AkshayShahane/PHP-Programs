<?php

$str="Yahoo Baba";
echo "This is the example of trim()<br>";
echo trim($str,"Ya");	//It is case-sesitive
echo "<hr>";

echo "This is the example of rtrim()<br>";
echo rtrim($str,"Ya");	//It is case-sesitive
echo "<hr>";

echo "This is the example of ltrim()<br>";
echo ltrim($str,"Ya");	//It is case-sesitive
echo "<hr>";

echo "This is the example of chop()<br>";
echo chop($str,"Ya");	//It is case-sesitive
echo "<hr>";

?>