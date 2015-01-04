
<footer>
	<ul class="gov">
	<?php
	foreach ( $govMap as $name => $html )
		echo "<li class=\"gov\"><a class=\"gov\" href =\"$html\">$name</a></li>\n";
	?>
	</ul>
</footer>
