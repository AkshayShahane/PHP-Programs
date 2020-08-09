<?php

//Program for array ele.count
$food=['orange','banana','apple','kevi','orange'];
echo count($food);

echo "<hr>";
$food2=[

	"fruits"=>['orange','banana','apple','grapes','orange'],
	"veggie"=>['carrot','pea','collard']
];
echo count($food2,1); //It will return only 2 it will not count values inside array so for that we have to pass another parameter that is 1 bydefault is 0,when we give 1 it will count element of array of array...
echo "<br>By Using Sizeof function<br>";
echo sizeof($food2,1);
echo "<br>";
echo "<pre>";
print_r(array_count_values($food));
echo "</pre>";
?>