<?php

$newArray=range('A','V');
echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<hr>";
$newArray=range(1,5);
echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<hr>Use of Third parameter";
$newArray=range(1,10,2);
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>