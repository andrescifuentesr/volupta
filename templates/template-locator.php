<?php
/*
Template Name: Template Store Locator
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main site-locator" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<section class="section-hero locator-hero" style="background-image:url('<?php the_post_thumbnail_url(); ?>');">
					<div class="product-hero--wrapper">
						<div class="section-hero__content locator-hero__content">
							<?php the_title( '<h2 class="section-hero__title">', '</h2>' ); ?>
						</div>
					</div>	
				</section><!-- .about-hero -->

				<div class="page-wrapper">

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

				</div><!-- .page-wrapper -->

			<?php endwhile; // End of the loop.?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>