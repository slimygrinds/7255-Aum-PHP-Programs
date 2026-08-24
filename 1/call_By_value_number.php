<?php
	
	function abc(&$n2){
		$n2 += 10;
		echo "After Add Number $n2 <br />";
	}
	$n1 = 100;
	echo "Before Add Number $n1 <br />";
	abc($n1);
?>