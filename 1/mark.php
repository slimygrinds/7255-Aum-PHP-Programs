<?php
	
	define("University","Marwadi University");
	define("Passing",35);
	
	$s_name = "Ketan Marwadi";
	$s_roll = "00000000001";
	$s_sem = "01";
	$s1 = 35;
	$s2 = 35;
	$s3 = 35;
	$s4 = 35;
	$s5 = 35;
	
	$total = ($s1 + $s2 + $s3 + $s4 + $s5 );
	$per = $total/5;
	
	echo "<center>";
	echo "<h2>" . University . "</h2>" . "<br />";
	echo "<h2>" . "Pervious Sem Result" . "</h3>" . "<br />";
	echo "=======================================" . "<br />";
	echo "Student Name : $s_name" . "<br />";
	echo "Student Roll : $s_roll" . "<br />";
	echo "Student Sem : $s_sem" . "<br />";
	echo "<hr />";
	echo "Subject 1 : $s1" . "<br />";
	echo "Subject 2 : $s2" . "<br />";
	echo "Subject 3 : $s3" . "<br />";
	echo "Subject 4 : $s4" . "<br />";
	echo "Subject 5 : $s5" . "<br />";
	echo "=======================================" . "<br />";
	echo "Total : $total" . "<br />";
	echo "Per : $per" . "<br />";
	echo "=======================================" . "<br />";
	
	if ($s1 >= Passing && $s2 >= Passing && $s3 >= Passing && $s4 >= Passing && $s5 >= Passing)
	{
		echo "<b> Status : PASS </b>" . "<br />";
	}
	else
	{
		echo "<b> Status : Fail </b>" . "<br />";
	}
	echo "</center>";
?>