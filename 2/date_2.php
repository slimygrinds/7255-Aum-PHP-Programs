<?php
	date_default_timezone_set('Asia/kolkata');
	$ts = time();
	echo($ts);
	echo("<br />");
	echo(date("F d, Y h:i:s A", $ts));
?>