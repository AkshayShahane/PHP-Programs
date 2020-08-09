<?php

$str="I love python and PHP too!";


echo "This is the example of convert_uuencode()<br>";
$encodedstr=convert_uuencode($str);
echo "<h1>".$encodedstr."</h1>";
echo "<hr>";

echo "This is the example of convert_uudecode()<br>";
$decodedstr=convert_uudecode($encodedstr);
echo "<h1>".$decodedstr."</h1>";
echo "<hr>";
?>