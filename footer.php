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

			<a class="rss-sign" href="<?php bloginfo('atom_url'); ?>" title="<?php printf( __( 'RSS Atom Feed', 'motojuice' ) ); ?>" target="_blank">
				<span><?php printf( __( 'RSS Atom', 'motojuice' ) ); ?></span>
			</a><!-- .rss-sign -->

			<div class="copyright-sign">
				<?php printf( __( 'Copyright © 2010-%s. All Rights Reserved', 'motojuice' ), date('Y') ); ?>
			</div><!--.copyright-sign-->

			<div class="design-sign">
				<?php printf( __( 'Designed by ', 'motojuice' ) ); ?>
				<a href="<?php echo esc_url( __( 'https://exlmoto.ru/', 'motojuice' ) ); ?>"><?php printf( __( 'EXL', 'motojuice' ) ); ?></a>
			</div><!--.design-sign-->

			<div class="theme-sign">
				<?php printf( __( 'Theme: ', 'motojuice' ) ); ?>
				<a href="<?php echo esc_url( __( 'https://github.com/EXL/MotoJuice', 'motojuice' ) ); ?>"><?php printf( __( 'Moto Juice', 'motojuice' ) ); ?></a>
			</div><!--.theme-sign-->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
