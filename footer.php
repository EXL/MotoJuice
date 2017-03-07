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
				<table class="skin-table" cellspacing="5" cellpadding="0">
					<tr>
						<td><div name="Skin0" class="skinClass" title="<?php printf( __( 'Light Skin', 'moto-juice' ) ); ?>" id="skinDefault"></div></td>
						<td><div name="Skin1" class="skinClass" title="<?php printf( __( 'Gray Skin', 'moto-juice' ) ); ?>" id="skinOgre"></div></td>
					</tr>
					<tr>
						<td><div name="Skin2" class="skinClass" title="<?php printf( __( 'Green Skin', 'moto-juice' ) ); ?>" id="skinGreen"></div></td>
						<td><div name="Skin3" class="skinClass" title="<?php printf( __( 'Orange Skin', 'moto-juice' ) ); ?>" id="skinOrange"></div></td>
					</tr>
					<tr>
						<td><div name="Skin4" class="skinClass" title="<?php printf( __( 'Blue Skin', 'moto-juice' ) ); ?>" id="skinBlue"></div></td>
						<td><div name="Skin5" class="skinClass" title="<?php printf( __( 'Yellow Skin', 'moto-juice' ) ); ?>" id="skinYellow"></div></td>
					</tr>
					<tr>
						<td><div name="Skin6" class="skinClass" title="<?php printf( __( 'Solarized Skin', 'moto-juice' ) ); ?>" id="skinSolarized"></div></td>
						<td><div name="Skin7" class="skinClass" title="<?php printf( __( 'Dark Skin', 'moto-juice' ) ); ?>" id="skinDark"></div></td>
					</tr>
				</table>
			</div>

			<a class="rss-sign" href="<?php bloginfo('atom_url'); ?>" title="<?php printf( __( 'RSS Atom Feed', 'moto-juice' ) ); ?>" target="_blank">
				<span><?php printf( __( 'RSS Atom', 'moto-juice' ) ); ?></span>
			</a><!-- .rss-sign -->

			<div class="footer-sign">
				<div class="copyright-sign">
					<?php printf( __( '(c) 2010-%s. All Rights Reserved', 'moto-juice' ), date('Y') ); ?>
				</div><!--.copyright-sign-->

				<div class="design-sign">
					<?php printf( __( 'Designed by ', 'moto-juice' ) ); ?>
					<a href="<?php echo esc_url( __( 'http://exlmoto.ru/', 'moto-juice' ) ); ?>"><?php printf( __( 'EXL', 'moto-juice' ) ); ?></a>
				</div><!--.design-sign-->

				<div class="theme-sign">
					<?php printf( __( 'Theme: ', 'moto-juice' ) ); ?>
					<a href="<?php echo esc_url( __( 'https://github.com/EXL/MotoJuice', 'moto-juice' ) ); ?>" target="_blank"><?php printf( __( 'Moto Juice', 'moto-juice' ) ); ?></a>
				</div><!--.theme-sign-->
			</div><!--.footer-sign-->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
