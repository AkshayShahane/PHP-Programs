<?php
$a=array("bill"=>25,"steave"=>28,"Joe"=>45);
echo "<h1><pre>";
var_dump($a);
print_r($a);
echo "</pre></h1>";
echo "<h1>".$a["bill"]."</h1>";
echo "<h1>".$a["steave"]."</h1>";
echo "<h1>".$a["Joe"]."</h1>";
?>