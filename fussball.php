<?php 
	include 'config.php';
	include 'utils.php';
	$fussballVereine = array (
			array (
					"logo" => "fcbayern.png",
					"name" => "FC Bayern München",
					"ort" => "München",
					"bewertung" => 5
			),
			array (
					"logo" => "fcaugsburg.jpg",
					"name" => "FC Augsburg",
					"ort" => "Augsburg",
					"bewertung" => 4
			)
	);
	printDefault(getEntries($fussballVereine, 'fussball'));
?>