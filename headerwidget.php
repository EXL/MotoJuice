<div class="headerWidget" id="headerWidgetId">
	<?php
		$imagesCount = 5;
		$themeDir = get_stylesheet_directory_uri();
		$allProjects = __( 'Go to All Projects Page', 'moto-juice' );

		// Arrow
		$arrw = "<a href=\"http://exlmoto.ru/projects/\" title=\"" . $allProjects . "\">" .
					"<img class=\"imgElem\" id=\"imgElem99\" src=\"" . $themeDir . "/images/widget/arrow.png\" />" .
				"</a>";
		echo $arrw;

		$imageLinks = array(
			"<a href=\"http://exlmoto.ru/spout-droid/\" title=\"Spout\">" .
				"<img class=\"imgElem\" id=\"imgElem0\" src=\"" . $themeDir . "/images/widget/0.png\" />" .
			"</a>",
			"<a href=\"http://exlmoto.ru/kenlab3d-droid/\" title=\"Ken's Labyrinth\">" .
				"<img class=\"imgElem\" id=\"imgElem1\" src=\"" . $themeDir . "/images/widget/1.png\" />" .
			"</a>",
			"<a href=\"http://exlmoto.ru/astrosmash-droid/\" title=\"AstroSmash\">" .
				"<img class=\"imgElem\" id=\"imgElem2\" src=\"" . $themeDir . "/images/widget/2.png\" />" .
			"</a>",
			"<a href=\"http://exlmoto.ru/snooder21-droid/\" title=\"Snooder 21\">" .
				"<img class=\"imgElem\" id=\"imgElem3\" src=\"" . $themeDir . "/images/widget/3.png\" />" .
			"</a>",
			"<a href=\"http://exlmoto.ru/bezier-clock/\" title=\"Bezier Clock\">" .
				"<img class=\"imgElem\" id=\"imgElem4\" src=\"" . $themeDir . "/images/widget/4.png\" />" .
			"</a>",
			"<a href=\"http://exlmoto.ru/nxengine/\" title=\"Cave Story\">" .
				"<img class=\"imgElem\" id=\"imgElem5\" src=\"" . $themeDir . "/images/widget/5.png\" />" .
			"</a>",
			"<a href=\"http://exlmoto.ru/writing-telegram-bots/\" title=\"Gadget Hackwrench\">" .
				"<img class=\"imgElem\" id=\"imgElem6\" src=\"" . $themeDir . "/images/widget/6.png\" />" .
			"</a>"
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
	?>

	<div class="imgDescription" id="imgDesc0"><?php printf( __( '<b>Project 1</b> Description.', 'moto-juice' ) ); ?></div>
	<div class="imgDescription" id="imgDesc1"><?php printf( __( '<b>Project 2</b> Description.', 'moto-juice' ) ); ?></div>
	<div class="imgDescription" id="imgDesc2"><?php printf( __( '<b>Project 3</b> Description.', 'moto-juice' ) ); ?></div>
	<div class="imgDescription" id="imgDesc3"><?php printf( __( '<b>Project 4</b> Description.', 'moto-juice' ) ); ?></div>
	<div class="imgDescription" id="imgDesc4"><?php printf( __( '<b>Project 5</b> Description.', 'moto-juice' ) ); ?></div>
	<div class="imgDescription" id="imgDesc5"><?php printf( __( '<b>Project 6</b> Description.', 'moto-juice' ) ); ?></div>
	<div class="imgDescription" id="imgDesc6"><?php printf( __( '<b>Project 7</b> Description.', 'moto-juice' ) ); ?></div>
	<div class="imgDescription" id="imgDesc7"><?php printf( __( '<b>Project 8</b> Description.', 'moto-juice' ) ); ?></div>
	<div class="imgDescription" id="imgDesc8"><?php printf( __( '<b>Project 9</b> Description.', 'moto-juice' ) ); ?></div>
	<div class="imgDescription" id="imgDesc9"><?php printf( __( '<b>Project 10</b> Description.', 'moto-juice' ) ); ?></div>
	<div class="imgDescription" id="imgDesc10"><?php printf( __( '<b>Project 11</b> Description.', 'moto-juice' ) ); ?></div>
	<div class="imgDescription" id="imgDesc11"><?php printf( __( '<b>Project 12</b> Description.', 'moto-juice' ) ); ?></div>
	<div class="imgDescription" id="imgDesc12"><?php printf( __( '<b>Project 13</b> Description.', 'moto-juice' ) ); ?></div>
	<div class="imgDescription" id="imgDesc13"><?php printf( __( '<b>Project 14</b> Description.', 'moto-juice' ) ); ?></div>
	<div class="imgDescription" id="imgDesc14"><?php printf( __( '<b>Project 15</b> Description.', 'moto-juice' ) ); ?></div>
	<div class="imgDescription" id="imgDesc15"><?php printf( __( '<b>Project 16</b> Description.', 'moto-juice' ) ); ?></div>
	<div class="imgDescription" id="imgDesc99"><?php printf( __( '<b>Project 99</b> Description.', 'moto-juice' ) ); ?></div>
</div>
