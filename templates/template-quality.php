<?php
/*
Template Name: Template Quality
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<section class="section-hero quality-hero" style="background-image:url('<?php the_post_thumbnail_url(); ?>');">
					<div class="section-hero__content quality-hero__content">
						<?php the_content(); ?>
					</div>
				</section><!-- .quality-hero -->
				<section class="home-description">
					<div class="home-description--wrapper">
						<div class="typl8-pull-quote">
							<?php echo types_render_field( "section-quality-introduction", array( ) ); ?>
						</div>
					</div>
				</section><!-- .home-description -->
				<section class="quality">
					<div class="quality--wrapper">

						<div class="quality-description__wrapper">
							<div class="quality-description__image">
								<?php echo types_render_field( "section-sources-image", array( "alt" => "", "proportional" => "true" ) ); ?>
							</div><!--
							
						--><div class="quality-description__content">
								<h3 class="quality__title title_dotted"><?php echo types_render_field( "section-sources-title", array( ) ); ?></h3>
								<p class="quality__description">
								<?php echo types_render_field( "section-sources-content", array("output" => "raw" ) ); ?>
								</p>
							</div>
						</div>
						<div class="quality-description__wrapper">
							<div class="quality-description__image">
								<?php echo types_render_field( "section-packing-image", array( "alt" => "", "proportional" => "true" ) ); ?>
							</div><!--
							
						--><div class="quality-description__content">
								<h3 class="quality__title title_dotted"><?php echo types_render_field( "section-packing-title", array( ) ); ?></h3>
								<p class="quality__description">
								<?php echo types_render_field( "section-packing-content", array( ) ); ?>
								</p>
							</div>
						</div>
					</div>
				</section><!-- .quality-description -->

				<section id="js-parallax__trigger_1">
						<div id="js-parallaxBackground_1" style="background-image:url('<?php echo types_render_field( "section-certif-image", array( "alt" => "", "url" => "true" ) ); ?>'); background-position: 0px -150px;" class="section-banner quality-banner">
							<h3 class="section-banner__title"><?php echo types_render_field( "section-certif-title", array( ) ); ?></h3>
						</div>
				</section><!-- .quality-questions -->			

				<section class="quality-certifications">
					<div class="quality-certifications--wrapper">
						<div class="quality-certifications__introduction">
							<p><?php echo types_render_field( "section-certification-introduction", array( ) ); ?></p>
						</div>

						<div class="quality-certifications__wrapper">
							<div class="quality-certifications__pictitle title_dotted">
								<div class="quality-certifications__pictitle--img">
									<?php echo types_render_field( "section-certif-usda-image", array( "alt" => "", "proportional" => "true" ) ); ?>
								</div><!--
							--><h3 class="quality__title"><?php echo types_render_field( "section-certif-usda-title", array( ) ); ?></h3>
							</div><!--
						--><div class="quality-certifications__content">
								<p class="quality__certifications">
								<?php echo types_render_field( "section-certif-usda-content", array("output" => "raw" ) ); ?>
								</p>
							</div>
						</div><!--
					--><div class="quality-certifications__wrapper">
							<div class="quality-certifications__pictitle quality-certifications__pictitle---gmo title_dotted">
								<div class="quality-certifications__pictitle--img">
									<?php echo types_render_field( "section-certif-nongmo-image", array( "alt" => "", "proportional" => "true" ) ); ?>
								</div><!--
								--><h3 class="quality__title"><?php echo types_render_field( "section-certif-nongmo-title", array( ) ); ?></h3>
							</div><!--
						--><div class="quality-certifications__content">
								<p class="quality__certifications">
								<?php echo types_render_field( "section-certif-nongmo-content", array("output" => "raw" ) ); ?>
								</p>
							</div>
						</div><!--
					--><div class="quality-certifications__wrapper">
							<div class="quality-certifications__pictitle title_dotted">
								<div class="quality-certifications__pictitle--img">
									<?php echo types_render_field( "section-certif-kosher-image", array( "alt" => "U", "proportional" => "true" ) ); ?>
								</div><!--
								--><h3 class="quality__title"><?php echo types_render_field( "section-certif-kosher-title", array( ) ); ?></h3>
							</div><!--
						--><div class="quality-certifications__content">
								<p class="quality__certifications">
								<?php echo types_render_field( "section-certif-kosher-content", array("output" => "raw" ) ); ?>
								</p>
							</div>
						</div>

						<div class="quality-certifications__disclaimer">
							<p><?php echo types_render_field( "section-certification-disclaimer", array( ) ); ?></p>
						</div>
					</div>
				</section>

			<?php endwhile; // End of the loop.?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>