<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package volupta
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer__social">
			<?php get_template_part( 'menu', 'social' ); ?>
		</div><!-- .nav-social -->

		<div class="site-footer__nav">
			<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
		</div><!-- .nav-footer -->

		<div class="site-info">
			<p class="site-info__disclaimer"><?php _e( "COPYRIGHT © 2016 VOLUPTA LLC. ALL RIGHTS RESERVED.", "volupta") ?>
			</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<?php //we call a separate template for the Parallax JavaScript ?>
<?php get_template_part( 'template-parts/content-footer', get_post_format() ); ?>

</body>
</html>
