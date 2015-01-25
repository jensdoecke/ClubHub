<?php 
	include 'config.php';
	include 'utils.php';
	$schwimmenVereine = array (
			array (
					"logo" => "fcfreising.jpg",
					"name" => "FC Freising",
					"ort" => "Freising",
					"bewertung" => 5
			),
			array (
					"logo" => "fccoburg.jpg",
					"name" => "FC Coburg",
					"ort" => "Coburg",
					"bewertung" => 4
			)
	);
	printDefault(getEntries($schwimmenVereine, 'schwimmen'));
?>