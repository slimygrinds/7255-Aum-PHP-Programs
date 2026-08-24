<?php
	$target_path = "uploads/";
	$target_path .= basename($_FILES['fileToUpload']['name']);
	if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)){
		echo "Marwadi Successfully Hacked..!!";
	}else{
		echo "You are NOOOOB, BOT..!!";
	}
?>