<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package volupta
 */

get_header(); ?>

	<?php
		/*
		/////////////////
		Color definition
		///////////////// 
		*/
		//call of custom field ingredient_image-nutrition-product-image
		$background_color = types_render_field( "product-secondary-color", array( ) );
	?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main site-product" role="main" style="background:<?php echo esc_html( $background_color ); ?>;>

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-single-product', get_post_format() );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
