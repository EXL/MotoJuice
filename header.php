<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<!-- Note: wp_title filtered in functions.php -->
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">

	<hr class="widgetBreaker">

		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<div class="headerWidget" id="headerWidgetId">
				<a href="http://exlmoto.ru/spout-droid/" title="Spout">
					<img class="imgElem" id="imgElem0" src="http://exlmoto.ru/wp-content/themes/twentyfourteen/images/widget/0.png" />
				</a>
				<a href="http://exlmoto.ru/kenlab3d-droid/" title="Ken’s Labyrinth">
					<img class="imgElem" id="imgElem1" src="http://exlmoto.ru/wp-content/themes/twentyfourteen/images/widget/1.png" />
				</a>
				<a href="http://exlmoto.ru/astrosmash-droid/" title="AstroSmash">
					<img class="imgElem" id="imgElem2" src="http://exlmoto.ru/wp-content/themes/twentyfourteen/images/widget/2.png" />
				</a>
				<a href="http://exlmoto.ru/snooder21-droid/" title="Snooder 21">
					<img class="imgElem" id="imgElem3" src="http://exlmoto.ru/wp-content/themes/twentyfourteen/images/widget/3.png" />
				</a>
				<a href="http://exlmoto.ru/bezier-clock/" title="Bezier Clock">
					<img class="imgElem" id="imgElem4" src="http://exlmoto.ru/wp-content/themes/twentyfourteen/images/widget/4.png" />
				</a>

				<div class="imgDescription" id="imgDesc0"><?php printf( __( '<b>Project 1</b> Description.', 'motojuice' ) ); ?></div>
				<div class="imgDescription" id="imgDesc1"><?php printf( __( '<b>Project 2</b> Description.', 'motojuice' ) ); ?></div>
				<div class="imgDescription" id="imgDesc2"><?php printf( __( '<b>Project 3</b> Description.', 'motojuice' ) ); ?></div>
				<div class="imgDescription" id="imgDesc3"><?php printf( __( '<b>Project 4</b> Description.', 'motojuice' ) ); ?></div>
				<div class="imgDescription" id="imgDesc4"><?php printf( __( '<b>Project 5</b> Description.', 'motojuice' ) ); ?></div>
				<div class="imgDescription" id="imgDesc5"><?php printf( __( '<b>Project 6</b> Description.', 'motojuice' ) ); ?></div>
				<div class="imgDescription" id="imgDesc6"><?php printf( __( '<b>Project 7</b> Description.', 'motojuice' ) ); ?></div>
				<div class="imgDescription" id="imgDesc7"><?php printf( __( '<b>Project 8</b> Description.', 'motojuice' ) ); ?></div>
				<div class="imgDescription" id="imgDesc8"><?php printf( __( '<b>Project 9</b> Description.', 'motojuice' ) ); ?></div>
				<div class="imgDescription" id="imgDesc9"><?php printf( __( '<b>Project 10</b> Description.', 'motojuice' ) ); ?></div>
				<div class="imgDescription" id="imgDesc10"><?php printf( __( '<b>Project 11</b> Description.', 'motojuice' ) ); ?></div>
				<div class="imgDescription" id="imgDesc11"><?php printf( __( '<b>Project 12</b> Description.', 'motojuice' ) ); ?></div>
				<div class="imgDescription" id="imgDesc12"><?php printf( __( '<b>Project 13</b> Description.', 'motojuice' ) ); ?></div>
				<div class="imgDescription" id="imgDesc13"><?php printf( __( '<b>Project 14</b> Description.', 'motojuice' ) ); ?></div>
				<div class="imgDescription" id="imgDesc14"><?php printf( __( '<b>Project 15</b> Description.', 'motojuice' ) ); ?></div>
				<div class="imgDescription" id="imgDesc15"><?php printf( __( '<b>Project 16</b> Description.', 'motojuice' ) ); ?></div>
			</div>

			<div class="mainDescription" id="imgDescMain"></div>
			<div class="secondDescription" id="imgDescSecond"><?php printf( __( 'Please move your mouse cursor over the icon to read the description of the my current projects. To hide a description, move your mouse cursor to this inscription.', 'motojuice' ) ); ?></div>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">
