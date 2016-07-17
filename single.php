<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package volupta
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main site-page" role="main">

			<section class="section-hero home-hero">
			</section><!-- .home-hero -->

			<div class="page-wrapper">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

					// the_post_navigation();

				endwhile; // End of the loop.
				?>

			</div><!-- .page-wrapper -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
