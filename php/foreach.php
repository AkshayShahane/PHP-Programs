<?php

$colour=["green","red","yellow","olive","purple","silver","gold"];

foreach($colour as $values)
{
	echo "<h1 align='center'>".$values."</h1><br>";
}

echo "<hr>";
echo "Printing Values of Associative Array";
$a=[
	 "bill"=>25,
	 "gates"=>78,
	 "steave"=>112,
	 "elon"=>"01254"

];
foreach($a as $key=>$values)
{
	echo "<h1 align='center'>".$key." => ".$values."</h1><br>";
}

echo "<hr>";
$name=[
	 "bill"=>2500,
	 "gates"=>7815,
	 "steave"=>1102,
	 "elon"=>"01254",
	 "einstin"=>845213,
	 "Gaidhani"=>4120

];

foreach($name as $first=>$salary)
{
	echo "<h1 align='right'>".$first." => ".$salary."</h1><br>";
}


?>