
<header>
	<a href="index.php"><img alt="Logo Club Hub" src="img/logo.png" /></a>
	<form>
		<input type="text" class="suchText" name="suche" placeholder="Suchen..."> <input
			type="submit" class="suchButton" value="Los">
	</form>
	
	<ul class="account">
	<?php
	foreach ( $accountMap as $name => $html )
		echo "<li class=\"account\"><a class=\"account\" href =\"$html\">$name</a></li>\n";
	?>
	</ul>

</header>