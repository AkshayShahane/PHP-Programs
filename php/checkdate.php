<?php

echo "<h1>".checkdate(5, 4, 2012)."</h1><br>";

if(checkdate(2, 29, 2019)==1)
{
	echo "<h1>"."Date is correct...."."</h1><br>";
}
else
{
	echo "<h1>"."Date is incorrect...."."</h1><br>";
}


$date1=date_create("2013-03-15");
$date2=date_create("2015-04-14");

$diff=date_diff($date1,$date2);
echo $diff->days." Days";
echo $diff->invert;
//echo $diff->first_last_day_of;

echo "<pre>";
print_r($diff);
echo "</pre>";
?>