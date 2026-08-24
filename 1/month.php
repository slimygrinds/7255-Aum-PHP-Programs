<?php
	
	echo " <h3> Using If-else....else-if..!! </h3><br/><br />";
	
	$m = date("n");
	
	if($m == 1){
		echo "January";
	}else if($m == 2){
		echo "February";
	}else if($m == 3){
		echo "March";
	}else if($m == 4){
		echo "April";
	}else if($m == 5){
		echo "May";
	}else if($m == 6){
		echo "June";
	}else if($m == 7){
		echo "July";
	}else if($m == 8){
		echo "August";
	}else if($m == 9){
		echo "September";
	}else if($m == 10){
		echo "October";
	}else if($m == 11){
		echo "November";
	}else{
		echo "December";
	}
	
	echo "<hr />";
	
	echo " <h3> Using switch case </h3><br /><br />";
	
	switch($m){
		case 1: echo "January"; break;
		case 2: echo "February"; break;
		case 3: echo "March"; break;
		case 4: echo "April"; break;
		case 5: echo "May"; break;
		case 6: echo "June"; break;
		case 7: echo "July"; break;
		case 8: echo "August"; break;
		case 9: echo "September"; break;
		case 10: echo "October"; break;
		case 11: echo "November"; break;
		case 12: echo "December"; break;
		
	}
?>