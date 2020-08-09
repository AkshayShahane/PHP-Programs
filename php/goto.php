<?php
	for($i=1;$i<=10;$i++)
	{
		echo $i."<br>";
		if($i==5)
		{
			goto abc;
		}
	}
	abc:
	echo "It's Me<br>";
	echo "It's Me-1<br>";
	echo "It's Me-2<br>";
	echo "It's Me-3<br>";
?>