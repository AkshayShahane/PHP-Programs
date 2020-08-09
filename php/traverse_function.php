<?php

$food=array('a'=>'orange','b'=>'banana','carrot','d'=>'mango');

echo "This is the function demonstration for next: <br>";
echo next($food);
echo "<hr>";

echo "This is the function demonstration for prev: <br>";
echo prev($food);
echo "<hr>";

echo "This is the function demonstration for current: <br>";
echo current($food);
echo "<hr>";

echo "This is the function demonstration for end: <br>";
echo end($food);
echo "<hr>";

echo "This is the function demonstration for key: <br>";
echo key($food);
echo "<hr>";

echo "This is the function demonstration for pos: <br>";
echo pos($food);
echo "<hr>";

echo "This is the function demonstration for each: <br>";

echo "<pre>";
print_r(each($food));
echo "</pre>";
echo "<hr>";

echo "This is the function demonstration for reset: <br>";
echo reset($food);
echo "<hr>";
?>