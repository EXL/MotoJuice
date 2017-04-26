<div class="headerWidget" id="headerWidgetId">
	<?php
		$imagesCount = 3;
		$themeDir = get_stylesheet_directory_uri();
		$allProjects = __( 'Go to All Projects Page', 'moto-juice' );

		// Arrow
		$arrw = "<a href=\"http://exlmoto.ru/projects/\" title=\"" . $allProjects . "\">" .
					"<img class=\"imgElem\" src=\"" . $themeDir . "/images/widget/arrow.png\" />" .
				"</a>";
		echo $arrw;

		$imageLinks = array(
			"<div class=\"projectIcon\">" .
				"<a href=\"http://exlmoto.ru/spout-droid/\" title=\"Spout\">" .
					"<img class=\"imgElem\" align=\"left\" src=\"" . $themeDir . "/images/widget/0.png\" />" .
				"</a>" . __( '<b>Project 1</b> Description.', 'moto-juice' ) .
			"</div>",
			"<div class=\"projectIcon\">" .
				"<a href=\"http://exlmoto.ru/kenlab3d-droid/\" title=\"Ken's Labyrinth\">" .
					"<img class=\"imgElem\" align=\"left\" src=\"" . $themeDir . "/images/widget/1.png\" />" .
				"</a>" . __( '<b>Project 2</b> Description.', 'moto-juice' ) .
			"</div>",
			"<div class=\"projectIcon\">" .
				"<a href=\"http://exlmoto.ru/astrosmash-droid/\" title=\"AstroSmash\">" .
					"<img class=\"imgElem\" align=\"left\" src=\"" . $themeDir . "/images/widget/2.png\" />" .
				"</a>" . __( '<b>Project 3</b> Description.', 'moto-juice' ) .
			"</div>",
			"<div class=\"projectIcon\">" .
				"<a href=\"http://exlmoto.ru/snooder21-droid/\" title=\"Snooder 21\">" .
					"<img class=\"imgElem\" align=\"left\" src=\"" . $themeDir . "/images/widget/3.png\" />" .
				"</a>" . __( '<b>Project 4</b> Description.', 'moto-juice' ) .
			"</div>",
			"<div class=\"projectIcon\">" .
				"<a href=\"http://exlmoto.ru/bezier-clock/\" title=\"Bezier Clock\">" .
					"<img class=\"imgElem\" align=\"left\" src=\"" . $themeDir . "/images/widget/4.png\" />" .
				"</a>" . __( '<b>Project 5</b> Description.', 'moto-juice' ) .
			"</div>",
			"<div class=\"projectIcon\">" .
				"<a href=\"http://exlmoto.ru/nxengine/\" title=\"Cave Story\">" .
					"<img class=\"imgElem\" align=\"left\" src=\"" . $themeDir . "/images/widget/5.png\" />" .
				"</a>" . __( '<b>Project 6</b> Description.', 'moto-juice' ) .
			"</div>",
			"<div class=\"projectIcon\">" .
				"<a href=\"http://exlmoto.ru/writing-telegram-bots/\" title=\"Gadget Hackwrench\">" .
					"<img class=\"imgElem\" align=\"left\" src=\"" . $themeDir . "/images/widget/6.png\" />" .
				"</a>" . __( '<b>Project 7</b> Description.', 'moto-juice' ) .
			"</div>",
			"<div class=\"projectIcon\">" .
				"<a href=\"http://exlmoto.ru/new-updates-and-tools/#1\" title=\"Synergy Calls\">" .
					"<img class=\"imgElem\" align=\"left\" src=\"" . $themeDir . "/images/widget/7.png\" />" .
				"</a>" . __( '<b>Project 8</b> Description.', 'moto-juice' ) .
			"</div>",
			"<div class=\"projectIcon\">" .
				"<a href=\"http://exlmoto.ru/adamant-armor-affection-adventure-droid/\" title=\"Adamant Armor Affection Adventure\">" .
					"<img class=\"imgElem\" align=\"left\" src=\"" . $themeDir . "/images/widget/8.png\" />" .
				"</a>" . __( '<b>Project 9</b> Description.', 'moto-juice' ) .
			"</div>"
		);

		$lengthArr = count($imageLinks);
		$randNum = rand(0, $lengthArr - 1);
		$offset = ($randNum + $imagesCount) - $lengthArr;

		if ($randNum <= $lengthArr - $imagesCount) {
			for ($i = $randNum; $i < $randNum + $imagesCount; $i++) {
				echo $imageLinks[$i];
			}
		} else {
			for ($j = $randNum; $j < $lengthArr; $j++) {
				echo $imageLinks[$j];
			}

			for ($k = 0; $k < $offset; $k++) {
				echo $imageLinks[$k];
			}
		}
	?>

	<?php 	/*
			 * Please use the PoEdit program for changing the descriptions. Don't edit this labels manually!
			 * PoEdit site: https://poedit.net/
			 */

			 __( '<b>Project 1</b> Description.', 'moto-juice' );
			 __( '<b>Project 2</b> Description.', 'moto-juice' );
			 __( '<b>Project 3</b> Description.', 'moto-juice' );
			 __( '<b>Project 4</b> Description.', 'moto-juice' );
			 __( '<b>Project 5</b> Description.', 'moto-juice' );
			 __( '<b>Project 6</b> Description.', 'moto-juice' );
			 __( '<b>Project 7</b> Description.', 'moto-juice' );
			 __( '<b>Project 8</b> Description.', 'moto-juice' );
			 __( '<b>Project 9</b> Description.', 'moto-juice' );
			 __( '<b>Project 10</b> Description.', 'moto-juice' );
			 __( '<b>Project 11</b> Description.', 'moto-juice' );
			 __( '<b>Project 12</b> Description.', 'moto-juice' );
			 __( '<b>Project 13</b> Description.', 'moto-juice' );
			 __( '<b>Project 14</b> Description.', 'moto-juice' );
			 __( '<b>Project 15</b> Description.', 'moto-juice' );
			 __( '<b>Project 16</b> Description.', 'moto-juice' );
			 __( '<b>Project 17</b> Description.', 'moto-juice' );
			 __( '<b>Project 18</b> Description.', 'moto-juice' );
			 __( '<b>Project 19</b> Description.', 'moto-juice' );
			 __( '<b>Project 20</b> Description.', 'moto-juice' );
	?>
</div>
