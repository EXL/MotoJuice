<div class="headerWidget" id="headerWidgetId">
	<?php
		$imagesCount = 3;
		$themeDir = get_stylesheet_directory_uri();

		// Please use the PoEdit program for changing the descriptions. Don't edit this labels manually!
		// PoEdit site: https://poedit.net/
		$p1  = __( '<b>Project 1</b> Description.', 'moto-juice' );
		$p2  = __( '<b>Project 2</b> Description.', 'moto-juice' );
		$p3  = __( '<b>Project 3</b> Description.', 'moto-juice' );
		$p4  = __( '<b>Project 4</b> Description.', 'moto-juice' );
		$p5  = __( '<b>Project 5</b> Description.', 'moto-juice' );
		$p6  = __( '<b>Project 6</b> Description.', 'moto-juice' );
		$p7  = __( '<b>Project 7</b> Description.', 'moto-juice' );
		$p8  = __( '<b>Project 8</b> Description.', 'moto-juice' );
		$p9  = __( '<b>Project 9</b> Description.', 'moto-juice' );
		$p10 = __( '<b>Project 10</b> Description.', 'moto-juice' );
		$p11 = __( '<b>Project 11</b> Description.', 'moto-juice' );
		$p12 = __( '<b>Project 12</b> Description.', 'moto-juice' );
		$p13 = __( '<b>Project 13</b> Description.', 'moto-juice' );
		$p14 = __( '<b>Project 14</b> Description.', 'moto-juice' );
		$p15 = __( '<b>Project 15</b> Description.', 'moto-juice' );
		$p16 = __( '<b>Project 16</b> Description.', 'moto-juice' );
		$p17 = __( '<b>Project 17</b> Description.', 'moto-juice' );
		$p18 = __( '<b>Project 18</b> Description.', 'moto-juice' );
		$p19 = __( '<b>Project 19</b> Description.', 'moto-juice' );
		$p20 = __( '<b>Project 20</b> Description.', 'moto-juice' );
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
				"</a>" . $p1 .
			"</div>",
			"<div class=\"projectIcon\">" .
				"<a href=\"http://exlmoto.ru/kenlab3d-droid/\" title=\"Ken's Labyrinth\">" .
					"<img class=\"imgElem\" align=\"left\" src=\"" . $themeDir . "/images/widget/1.png\" />" .
				"</a>" . $p2 .
			"</div>",
			"<div class=\"projectIcon\">" .
				"<a href=\"http://exlmoto.ru/astrosmash-droid/\" title=\"AstroSmash\">" .
					"<img class=\"imgElem\" align=\"left\" src=\"" . $themeDir . "/images/widget/2.png\" />" .
				"</a>" . $p3 .
			"</div>",
			"<div class=\"projectIcon\">" .
				"<a href=\"http://exlmoto.ru/snooder21-droid/\" title=\"Snooder 21\">" .
					"<img class=\"imgElem\" align=\"left\" src=\"" . $themeDir . "/images/widget/3.png\" />" .
				"</a>" . $p4 .
			"</div>",
			"<div class=\"projectIcon\">" .
				"<a href=\"http://exlmoto.ru/bezier-clock/\" title=\"Bezier Clock\">" .
					"<img class=\"imgElem\" align=\"left\" src=\"" . $themeDir . "/images/widget/4.png\" />" .
				"</a>" . $p5 .
			"</div>",
			"<div class=\"projectIcon\">" .
				"<a href=\"http://exlmoto.ru/nxengine/\" title=\"Cave Story\">" .
					"<img class=\"imgElem\" align=\"left\" src=\"" . $themeDir . "/images/widget/5.png\" />" .
				"</a>" . $p6 .
			"</div>",
			"<div class=\"projectIcon\">" .
				"<a href=\"http://exlmoto.ru/writing-telegram-bots/\" title=\"Gadget Hackwrench\">" .
					"<img class=\"imgElem\" align=\"left\" src=\"" . $themeDir . "/images/widget/6.png\" />" .
				"</a>" . $p7 .
			"</div>",
			"<div class=\"projectIcon\">" .
				"<a href=\"http://exlmoto.ru/new-updates-and-tools/#1\" title=\"Synergy Calls\">" .
					"<img class=\"imgElem\" align=\"left\" src=\"" . $themeDir . "/images/widget/7.png\" />" .
				"</a>" . $p8 .
			"</div>",
			"<div class=\"projectIcon\">" .
				"<a href=\"http://exlmoto.ru/adamant-armor-affection-adventure-droid/\" title=\"Adamant Armor Affection Adventure\">" .
					"<img class=\"imgElem\" align=\"left\" src=\"" . $themeDir . "/images/widget/8.png\" />" .
				"</a>" . $p9 .
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
</div>
