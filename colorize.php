<?php
	switch (intval($_COOKIE["skin"])) {
		default:
		case 0:
			break;
		case 1:
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . get_stylesheet_directory_uri() . "/style_gray.css\" title=\"gray\">";
			break;
		case 2:
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . get_stylesheet_directory_uri() . "/style_green.css\" title=\"green\">";
			break;
		case 3:
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . get_stylesheet_directory_uri() . "/style_orange.css\" title=\"orange\">";
			break;
		case 4:
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . get_stylesheet_directory_uri() . "/style_yellow.css\" title=\"yellow\">";
			break;
		case 5:
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . get_stylesheet_directory_uri() . "/style_light.css\" title=\"light\">";
			break;
		case 6:
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . get_stylesheet_directory_uri() . "/style_violet.css\" title=\"violet\">";
			break;
		case 7:
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . get_stylesheet_directory_uri() . "/style_dark.css\" title=\"dark\">";
			break;
	}
?>
