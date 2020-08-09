<?php

$str="Hello I am 'Yahoo Baba'";
$str2="Hello I am Yahoo Baba";
echo "This is the example of addslashes<br>";
$newstr=addslashes($str);		//addslashes(string);
echo $newstr;
echo "<hr>";

echo "This is the example of stripslashes<br>";
echo stripslashes($newstr);		//stripslashes(string);
echo "<hr>";

echo "This is the example of addcslashes<br>";
$newstr2=addcslashes($str2,'Y');	
echo $newstr2;	
echo "<hr>";

echo "This is the example of stripcslashes<br>";
echo stripcslashes($str2);	

echo "<hr>";
?>