<?php
	
	$ans = "";
	
	if(isset($_GET['n']) && $_GET['n'] !== ""){
		$n =  $_GET['n'];
		$ans = 1;
	
		for($i = 1; $i <= $n; $i++){
			$ans *= $i;
		}
	
		
	}
?>

<form method="get">
	Enter The Number : <input type="Number" name="n"><br>
	<input type="submit" value="find">
</form>

<?php

	if($ans !== ""){
		echo "$n Factorial is : $ans </br>";
	}
?>