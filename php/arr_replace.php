<?php

$fruits=array('banana','mango','watermelon','coconut',1=>'strawberry');
$colours=array('orange','red','blue','green');
$veggi=array('palak','dhaniya');


$new_array=array_replace($fruits, $colours,$veggi);
echo "</pre>";
print_r($new_array);
echo "</pre>";
?>