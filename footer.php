<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="skin-selector">
				<div class="skinClass" title="<?php printf( __( 'Orange Skin', 'moto-juice' ) ); ?>" id="skinDefault"></div>
				<div class="skinClass" title="<?php printf( __( 'Green Skin', 'moto-juice' ) ); ?>" id="skinOgre"></div>
				<div class="skinClass" title="<?php printf( __( 'Black Skin', 'moto-juice' ) ); ?>" id="skinBlack"></div>
				<div class="skinClass" title="<?php printf( __( 'Blue Skin', 'moto-juice' ) ); ?>" id="skinBlue"></div>
			</div>

			<a class="rss-sign" href="<?php bloginfo('atom_url'); ?>" title="<?php printf( __( 'RSS Atom Feed', 'moto-juice' ) ); ?>" target="_blank">
				<span><?php printf( __( 'RSS Atom', 'moto-juice' ) ); ?></span>
			</a><!-- .rss-sign -->

			<div class="copyright-sign">
				<?php printf( __( 'Copyright (c) 2010-%s. All Rights Reserved', 'moto-juice' ), date('Y') ); ?>
			</div><!--.copyright-sign-->

			<div class="design-sign">
				<?php printf( __( 'Designed by ', 'moto-juice' ) ); ?>
				<a href="<?php echo esc_url( __( 'https://exlmoto.ru/', 'moto-juice' ) ); ?>"><?php printf( __( 'EXL', 'moto-juice' ) ); ?></a>
			</div><!--.design-sign-->

			<div class="theme-sign">
				<?php printf( __( 'Theme: ', 'moto-juice' ) ); ?>
				<a href="<?php echo esc_url( __( 'https://github.com/EXL/MotoJuice', 'moto-juice' ) ); ?>"><?php printf( __( 'Moto Juice', 'moto-juice' ) ); ?></a>
			</div><!--.theme-sign-->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
