<?php
	$path = "./index.html";
	$f = fopen($path, "r");
	echo fread($f,filesize($path));
	fclose($f);
?>