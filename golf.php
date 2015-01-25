<?php 
	include 'config.php';
	include 'utils.php';
	$golfVereine = array (
			array (
					"logo" => "fclandshut.jpg",
					"name" => "FC Landshut",
					"ort" => "Landshut",
					"bewertung" => 3
			),
			array (
					"logo" => "fcaugsburg.jpg",
					"name" => "FC Augsburg",
					"ort" => "Augsburg",
					"bewertung" => 2
			)
	);
	printDefault(getEntries($golfVereine, 'golf'));
?>