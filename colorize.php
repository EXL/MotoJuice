<?php
	switch (intval($_COOKIE["skin"])) {
		default:
		case 0:
			break;
		case 1:
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . get_stylesheet_directory_uri() . "/style_gray.css\" title=\"gray\" />\n";
			break;
		case 2:
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . get_stylesheet_directory_uri() . "/style_green.css\" title=\"green\" />\n";
			break;
		case 3:
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . get_stylesheet_directory_uri() . "/style_orange.css\" title=\"orange\" />\n";
			break;
		case 4:
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . get_stylesheet_directory_uri() . "/style_blue.css\" title=\"blue\" />\n";
			break;
		case 5:
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . get_stylesheet_directory_uri() . "/style_yellow.css\" title=\"yellow\" />\n";
			break;
		case 6:
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . get_stylesheet_directory_uri() . "/style_solarized.css\" title=\"solarized\" />\n";
			break;
		case 7:
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . get_stylesheet_directory_uri() . "/style_dark.css\" title=\"dark\" />\n";
			break;
	}
?>
