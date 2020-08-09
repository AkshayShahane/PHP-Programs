<?php

$a="Hello Good Morning";
$newArray=explode(" " ,$a);

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<hr>";
$b=['Happy','Diwali','to','all'];
echo "<pre>";
print_r($b);
echo "</pre>";

$array=implode(" ", $b);
echo $array;
?>