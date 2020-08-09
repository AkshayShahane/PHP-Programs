<?php

$colours=[

	"Rakesh"=>[1,"Green","Leaves"],
	"Joshi"=>[2,"Red","Flower"],
	"Tushar"=>[3,"Silver","colour"],
	"Omkar"=>[4,"Orange","Flag"]

];

foreach($colours as $key=>$val1)
{
	echo $key;
	foreach ($val1 as $val2) {
		echo " ".$val2;
	}
	echo "<br>";
}

echo("<hr>");

$colours1=[

	"Rakesh"=>[1,"Green","Leaves"],
	"Joshi"=>[2,"Red","Flower"],
	"Tushar"=>[3,"Silver","colour"],
	"Omkar"=>[4,"Orange","Flag"]

];
echo "<table align='center' border='2px'cellspacing='5px' cellpadding='15px'>
<tr>
<th>Name</th>
<th>Sr.No</th>
<th>colour</th>
<th>Found_in</th>
</tr>
"
;
foreach($colours1 as $key=>$val1)
{

	echo "<tr><td>".$key."</td>";
	foreach ($val1 as $val2) {
		echo "<td> ".$val2."</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>