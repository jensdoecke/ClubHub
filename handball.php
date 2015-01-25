<?php 
	include 'config.php';
	include 'utils.php';
	$handballVereine = array (
			array (
					"logo" => "fclandshut.gif",
					"name" => "FC Landshut",
					"ort" => "Landshut",
					"bewertung" => 5
			),
			array (
					"logo" => "fcnuernberg.png",
					"name" => "FC Nuernberg",
					"ort" => "Nuernberg",
					"bewertung" => 4
			)
	);
	printDefault(getEntries($handballVereine, 'handball'));
?>