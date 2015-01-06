<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$menuMap = array (
		"Fußball" => "fussball.php",
		"Tennis" => "tennis.php",
		"Schwimmen" => "schwimmen.php",
		"Golf" => "golf.php" 
);

$accountMap = array (
		"Mein Verein" => "verein.php",
		"Community" => "community.php",
		"Hilfe" => "hilfe.php",
		"Ausloggen" => "logout.php" 
);

$govMap = array (
		"Unsere AGB" => "agb.php",
		"Datenschutzerklärung" => "datenschutz.php",
		"Impressum" => "impressum.php",
		"Cookies & Internet-Werbung" => "cookies.php" 
);

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

$tennisVereine = array ();

$schwimmenVereine = array ();

$golfVereine = array ();


?>