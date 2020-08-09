<?php

$a="Hello World";
$b="WOW";
echo "This is the example of str_pad";
echo "<h1>".str_pad($a,20,".")."</h1>";//syntax :   str_pad(string,length,pad_string,pad_type)

echo "<hr>";
echo "This is the example of str_repeat";
echo "<h1>".str_repeat($b,5)."</h1>";//syntax :   str_repeat(string,length)


		/*pad_types:
		1)STR_PAD_BOTH  
		2)STR_PAD_RIGHT
		3)STR_PAD_LEFT  	*/
?>




