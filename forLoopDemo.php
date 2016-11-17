<?php
	header("Content-Type:text/html;charset=utf-8");
	/*
	for($i=0;$i<10;$i++){
		echo "这是第 $i 次执行的结果<br/>";	
	}
	*/

	$val = array(a,5,b,1,8,9,c,2,y,7);
	for($i=0;$i<10;$i++){
		echo "$val[$i]";
		echo "<p>";
		for ($i=9; $i>=1; $i--) { 
			for ($j=$i; $j>=1; $j--) { 
				$temp=$i*$j;
				echo "$i X $j =$temp  ";
			}
			echo "<p>";
		}
		echo "<p>";
		for ($i=0; $i <10 ; $i++) { 
			echo "$val[$i]";
		}
		break;
	}
?>
