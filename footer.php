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

	<?php
		/*
		/////////////////
		Color definition
		///////////////// 
		*/
		//call of custom section-ingredients-product-title
		$main_color = types_render_field( "product-main-color", array( ) );
	?>	

	<footer id="colophon" class="site-footer" role="contentinfo" style="border-color:<?php echo esc_html( $main_color ); ?>;">
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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91650500-2', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
