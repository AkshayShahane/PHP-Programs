<?php



$date=date_create("2015-05-15");
$date2=date_create("2015-05-25");
date_add($date,date_interval_create_from_date_string("5 days"));

date_sub($date2,date_interval_create_from_date_string("10 days"));
echo date_format($date,"d-m-Y");
echo "<br>";
echo date_format($date2,"d-m-Y");

echo "<hr>";
echo "For date_modify function<br>";
date_modify($date,"10 days");
echo date_format($date,"d-m-Y");
?>