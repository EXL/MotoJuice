<?php
	switch (intval($_COOKIE["skin"])) {
		default:
		case 0:
			break;
		case 1:
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . get_stylesheet_directory_uri() . "/style_green.css\" title=\"green\">";
			break;
		case 2:
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . get_stylesheet_directory_uri() . "/style_black.css\" title=\"black\">";
			break;
		case 3:
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . get_stylesheet_directory_uri() . "/style_blue.css\" title=\"blue\">";
			break;
	}
?>
