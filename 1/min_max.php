<?php
	
	$a = $_GET['a'] ?? '';
	$b = $_GET['b'] ?? '';
	$c = $_GET['c'] ?? '';
	
	if($a !== '' && $b !== '' && $c !== ''){
		
		$max = $a;
		$min = $a;
		
		if($b > $max) $max = $b;
		if($c > $max) $max = $c;
		
		if($b < $min) $min = $b;
		if($c < $min) $min = $c;
		
		echo "Maximum Number is : $max <br />";
		echo "Minimum Number is : $min <br />";
	}else {
?>

<form method="get">
	Enter A: <input type="number" name="a"><br><br>
	Enter B: <input type="number" name="b"><br><br>
	Enter C: <input type="number" name="c"><br><br>
	<input type="submit" value="find">
</form>

	<?php } ?>