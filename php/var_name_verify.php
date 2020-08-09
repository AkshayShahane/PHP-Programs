<?php

print "Demonstration for print statement";
print "<br>";
print "Hello";
print "<hr>";

echo "Demonstration for allowed variable names"."<br>";
echo "We use" ."<b>".' firstname '."</b>"." variable"."<br>";
echo $firstname=20;
echo "<hr>";

echo "Demonstration for allowed variable names"."<br>";
echo "We use" ."<b>".' _firstname'."</b>"." variable"."<br>";
echo $_firstname=20;
echo "<hr>";

echo "Demonstration for allowed variable names"."<br>";
echo "We use" ."<b>".' first_name'."</b>"." variable"."<br>";
echo $first_name=20;
echo "<hr>";

echo "Demonstration for allowed variable names"."<br>";
echo "We use" ."<b>".' firstName'."</b>"." variable"."<br>";
echo $firstName=20;
echo "<hr>";

echo "Demonstration for allowed variable names"."<br>";
echo "We use" ."<b>".' firstName99'."</b>"." variable"."<br>";
echo $firstName99=20;
echo "<hr>";


echo "<h1>Wrong Way</h1>";
echo "first name";
echo "<hr>";

echo "<h1>Wrong Way</h1>";
echo "99firstname";
echo "<hr>";

echo "<h1>Wrong Way</h1>";
echo "first%name";
echo "<hr>";
?>
