<?php
	include("uso.html");
	//echo $_GET['http'];
	$adresa = $_GET['http'];
	//echo $adresa;
	//$output = shell_exec('wget -r -mk -P /home/ivona/Desktop/ http://fmi.unibuc.ro//');
	//$output = shell_exec('wget -r -mk http://fmi.unibuc.ro//');
	//$output = shell_exec('mkdir test');
	$output = shell_exec('wget -r -mk '.$adresa);
	echo "<pre>$output</pre>"; 
?>
	
