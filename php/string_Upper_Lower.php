<?php

$a="Akshay Shahane";
$b="sandip foundation";
$c="ME";
$d="akshay shahane";

echo "<h2>String to lower</h2><br>";
$result=strtolower($a);
echo $result;
echo "<hr>";

echo "<h2>String to Upper</h2><br>";
$result=strtoupper($a);
echo $result;
echo "<hr>";

echo "<h2>First Letter to upper</h2><br>";
$result=ucfirst($b);
echo $result;
echo "<hr>";

echo "<h2>First Letter to Lower</h2><br>";
$result=lcfirst($c);
echo $result;
echo "<hr>";

echo "<h2>First Letter of each word to Upper</h2><br>";
$result=ucwords($d);
echo $result;
echo "<hr>";
?>