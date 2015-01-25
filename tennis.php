<?php 

	include 'config.php';
	include 'utils.php';
	$tennisVereine = array (
			array (
					"logo" => "fcbamberg.jpg",
					"name" => "FC Bamberg",
					"ort" => "Bamberg",
					"bewertung" => 5
			),
			array (
					"logo" => "fcregensburg.gif",
					"name" => "FC Regensburg",
					"ort" => "Regensburg",
					"bewertung" => 4
			)
	);
	printDefault(getEntries($tennisVereine, 'tennis'));
?>