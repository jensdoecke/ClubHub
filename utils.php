<?php

function printDefault($text) {
	echo '<!DOCTYPE html><html>';
	printMetaData();
	echo '<body><div id="wrapper">';
	printHeader();
	echo '<div id="left">';
	printMenu();
	echo '</div>';
	echo '<div id="right">'.$text.'</div>';
	printFooter();
	echo '</div></body></html>';
}

function printMetaData() {
	echo '<head><meta charset="UTF-8"><title>ClubHub</title>';
	echo '<link rel="stylesheet" href="style.css" type="text/css">';
	echo '</head>';
}
function printHeader() {
	echo '<header>';
	echo '<a href="index.php"><img alt="Logo Club Hub" src="img/logo.png" /></a>';
	echo '<form>';
	echo '<input type="text" class="suchText" name="suche" placeholder="Suchen...">';
	echo '<input	type="submit" class="suchButton" value="Los">';
	echo '</form>';
	
	echo '<ul class="account">';
	
	foreach ( $GLOBALS['accountMap'] as $name => $html )
		echo '<li class="account"><a class="account" href="' . $html . '">' . $name . '</a></li>';
	
	echo '</ul>';
	
	echo '</header>';
}
function printFooter() {
	echo '<footer><ul class="gov">';
	foreach ( $GLOBALS['govMap'] as $name => $html )
		echo '<li class="gov"><a class="gov" href ="' . $html . '">' . $name . '</a></li>';
	echo '</ul></footer>';
}

function printMenu(){
	echo '<nav class="menu"><ul class="menu">';
	foreach ( $GLOBALS['menuMap'] as $name => $html )
		echo '<li class="menu"><a class="menu" href ="' . $html . '">' . $name . '</a></li>';
	echo '</ul></nav>';
}

function getEntries($array, $path) {
	$text = '';
	$text .= '<table class="verein"><thead>';
	$text .= '<tr><td/><td>Name</td><td>Ort</td><td>Bewertung</td></tr>';
	$text .= '</thead><tbody>';
	foreach ( $array as $verein ) {
		$text .= '<tr>';
		$text .= '<td><img src="./img/' . $path . '/' . $verein ['logo'] . '" width="80" height="80"/></td>';
		$text .= '<td>' . $verein ['name'] . '</td>';
		$text .= '<td>' . $verein ['ort'] . '</td>';
		$text .= '<td>';
		for($i = 0; $i < 5; $i ++) {
			if ($i < $verein ['bewertung']) {
				$text .= '<img src="./img/pokal_highlight.png" width="20" height="20"/>';
			} else {
				$text .= '<img src="./img/pokal_grey.png" width="20" height="20"/>';
			}
		}

		$text .= '</td>';
		$text .= '</tr>';
	}
	$text .= '</tbody></table>';
	return $text;
}
?>