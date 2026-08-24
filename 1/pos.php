<?php
	
	$tex = "Hello World, hello All";
	$find = "Hello";
	
	if(strpos($tex, $find)!==false){
		echo "Found!";
	}else{
		echo "Not Found!";
	}
	echo "<br />";
?>