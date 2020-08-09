<?php
$a="I love php,I am using php";
$b="I love PHP,I am using PHP";

$result=strpos($a,"php");
echo $result;
echo "<hr>";

$result=strrpos($a,"php");
echo $result;
echo "<hr>";

$result=stripos($b,"php");
echo $result;
echo "<hr>";

$result=strripos($b,"php");
echo $result;
echo "<hr>";
?>