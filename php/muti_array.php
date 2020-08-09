<?php
$emp=array(
 "krishna"=>array(1,"krishna","manager",55000),
 "salman"=>array(2,"Akshay","manager",52000),
 "mohan"=>array(3,"Arjun","manager",53000),
);


echo "<table border='2px' cellpadding='5px'>";
foreach($emp as $key=>$value)
{
	echo "<tr><td>".$key."</td>";
	foreach($value as $val)
	{
		echo "<td>".$val."</td>";
	}	
	echo "<tr>";
}
echo "</table>";
?>