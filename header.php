<header>
<?php
$menu = [ 
		"Anmelden" => "login.html",
		"Registrieren" => "register.html",
		"Forum" => "forum.html" 
];
foreach ( $menu as $key => $value ) {
	echo "<li><a href=\"/$value\">$key</a></li>";
}
?>
</header>