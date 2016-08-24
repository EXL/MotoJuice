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

			<a class="rss-sign" href="<?php bloginfo('atom_url'); ?>" title="<?php printf( __( 'RSS Atom Feed', 'twentyfourteen' ) ); ?>" target="_blank">
				<span><?php printf( __( 'RSS Atom', 'twentyfourteen' ) ); ?></span>
			</a><!-- .rss-sign -->

			<div class="copyright-sign">
				<?php printf( __( 'Copyright © 2010-%s. All Rights Reserved', 'twentyfourteen' ), date('Y') ); ?>
			</div><!--.copyright-sign-->

			<div class="design-sign">
				<?php printf( __( 'Designed by ', 'twentyfourteen' ) ); ?>
				<a href="<?php echo esc_url( __( 'https://exlmoto.ru/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'EXL', 'twentyfourteen' ) ); ?></a>
			</div><!--.design-sign-->

			<div class="theme-sign">
				<?php printf( __( 'Theme: ', 'twentyfourteen' ) ); ?>
				<a href="<?php echo esc_url( __( 'https://github.com/EXL/MotoJuice', 'twentyfourteen' ) ); ?>"><?php printf( __( 'MotoJuice', 'twentyfourteen' ) ); ?></a>
			</div><!--.theme-sign-->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
