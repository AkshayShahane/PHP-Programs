<?php

$a="akshay";	/* md5(string,raw);	raw=>TRUE/FALSE
					sha1(string,raw);	raw=>TRUE/FALSE
*/

echo "This is the example of md5 for password Protection....<br>";
echo md5($a,TRUE);
echo "<hr>";

echo "This is the example of md5 for password Protection....<br>";
echo md5($a,False);
echo "<hr>";

echo "This is the example of sha1 for password Protection....<br>";
echo sha1($a,TRUE);
echo "<hr>";

echo "This is the example of sha1 for password Protection....<br>";
echo sha1($a);
echo "<hr>";
?>