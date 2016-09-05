<?php
/*
Template Name: Template Contact
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main site-contact" role="main">

			<?php //we call a separate template for the Contact Page ?>
			<?php get_template_part( 'template-parts/content-contact', get_post_format() ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>