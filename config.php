<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$menuMap = array (
		"Fußball" => "fussball.php",
		"Tennis" => "tennis.php",
		"Schwimmen" => "schwimmen.php",
		"Golf" => "golf.php",
        "Tischtennis" => "tischtennis.php",
        "Handball" => "handball.php",
        "Judo" => "judo.php"
);

$accountMap = array (
		"Mein Verein" => "verein.php",
		"Community" => "community.php",
		"Hilfe" => "hilfe.php",
		"Ausloggen" => "logout.php" 
);

$govMap = array (
		"Unsere AGB´s" => "agb.php",
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

$judoVereine = array (
		array (
				"logo" => "fuerth.jpg",
				"name" => "FC Fuerth",
				"ort" => "Fuerth",
				"bewertung" => 5 
		),
		array (
				"logo" => "passau.jpg",
				"name" => "FC Passau",
				"ort" => "Passau",
				"bewertung" => 2 
		) 
);

$tennisVereine = array ();

$schwimmenVereine = array ();

$golfVereine = array ();

$tischtennisVereine = array ();

$handballVereine = array ();

$judoVereine = array ();

?>