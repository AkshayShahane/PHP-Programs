<?php

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","f"=>"green","d"=>"purple");
$a3=array("a"=>"red","f"=>"olive","d"=>"purple");

$newArray=array_diff($a1, $a2);

echo "This is the array with 2 argument....";
echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<hr>";
$newArray=array_diff($a1, $a2, $a3);

echo "This is the array with 3 argument....";
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>