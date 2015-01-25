<?php 
	include 'config.php';
	include 'utils.php';
	$tischtennisVereine = array (
			array (
					"logo" => "fcdachau.jpg",
					"name" => "FC Dachau",
					"ort" => "Dachau",
					"bewertung" => 5
			),
			array (
					"logo" => "fckarlsfeld.jpg",
					"name" => "FC Karlsfeld",
					"ort" => "Karlsfeld",
					"bewertung" => 1
			)
	);
	printDefault(getEntries($tischtennisVereine, 'tischtennis'));
?>