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
<?php include_once("colorize.php") ?>
<?php include_once("analyticstracking.php") ?>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">

	<hr class="widgetBreaker">

		<div class="header-main">
			<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				<img class="logo-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/header-logo.png" height="48">
			</a>

			<?php include_once("headerwidget.php") ?>

			<div class="mainDescription" id="imgDescMain"></div>
			<div class="secondDescription" id="imgDescSecond"><?php printf( __( 'Welcome!', 'moto-juice' ) ); ?></div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle" title="<?php printf( __( 'Show or hide menu', 'moto-juice' ) ); ?>"></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<div id="primary-menu" class="nav-menu" aria-expanded="true">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
					<!--?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?-->
				</div>
			</nav>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">
