<nav class="menu">
	<ul class="menu">
<?php
foreach ( $menuMap as $name => $html )
	echo "<li class=\"menu\"><a class=\"menu\" href =\"$html\">$name</a></li>\n";
?>
</ul>
</nav>