<?php 
	include 'config.php';
	include 'utils.php';
	printDefault(getEntries($GLOBALS['handballVereine'], "handball"));
?>