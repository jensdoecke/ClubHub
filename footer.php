<footer>
<?php
$menu = [ 
		"Impressum" => "impressum.html",
		"Kontakt" => "kontakt.html",
		"AGB" => "agb.html" 
];
foreach ( $menu as $key => $value ) {
	echo "<li><a href=\"/$value\">$key</a></li>";
}
?>
</footer>