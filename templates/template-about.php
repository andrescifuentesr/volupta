<?php
/*
Template Name: Template About us
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<section class="section-hero about-hero" style="background-image:url('<?php the_post_thumbnail_url(); ?>');">
					<div class="section-hero__content">
						<?php the_content(); ?>
					</div>
				</section><!-- .about-hero -->
				<section class="home-description">
					<div class="home-description--wrapper">
						<div class="typl8-pull-quote">
							<?php echo types_render_field( "section-about-us-introduction", array( ) ); ?>
						</div>
					</div>
				</section><!-- .home-description -->
				<section class="about-vision">
					<div class="about-vision--wrapper">
						<div class="about-vision__item-content">
							<h3 class="about-vision__item-title"><?php echo types_render_field( "section-mission-title", array() ); ?>
							</h3><!--
						
						--><div class="about-vision__item-description">
								<?php echo types_render_field( "section-mission-content", array( ) ); ?>
							</div>
						</div>

						<div class="about-vision__item-content">
							<h3 class="about-vision__item-title"><?php echo types_render_field( "section-vision-title", array() ); ?>
							</h3><!--
						
						--><div class="about-vision__item-description">
								<?php echo types_render_field( "section-vison-content", array( ) ); ?>
							</div>
						</div>
					</div>
				</section><!-- .about-ingredients -->

				<section id="js-parallax__trigger_1">
						<div id="js-parallaxBackground_1" style="background-image:url('<?php echo types_render_field( "section-thefaq-image", array( "alt" => "", "url" => "true" ) ); ?>'); background-position: 0px -150px;" class="section-banner about-banner">
							<h3 class="section-banner__title">
								<?php echo types_render_field( "section-thefaq-title", array( ) ); ?>
							</h3>
						</div>
				</section><!-- .about-nutrition -->

				<section class="about-questions">
					<div class="about-questions--wrapper">
						<?php
							$args = array(
								'post_type' 		=> 'faq', 	//Costum type child of FAQs		
								'order'				=> 'ASC',		// List in ascending order
								'orderby'      		=> 'id',		// List them in their menu order
							);
							$i = 1;
							$QueryQA = new WP_Query($args);
						?>
						<?php while ($QueryQA->have_posts()) : $QueryQA->the_post(); ?>		
			
					 	<div class="about-thequestion__wrapper"><!--
						
						 --><div class="about-thequestion__item">
								<span class="about-thequestion__number"><?php echo $i;?></span><!--
							
							--><div class="about-thequestion__number--div"><?php the_title(); ?></div>
							</div><!--
						
						 --><div class="about-thequestion__answer">
								<?php the_content(); ?>
								<?php $i++; //counter?>						
							</div><!-- End of about-thequestion__wrapper
					 --></div>
						<?php endwhile; // End of the loop. ?>
					</div>
				</section><!-- .about-questions -->	

				<?php wp_reset_postdata(); ?>		

				<?php //we call a separate template for the Contact Page ?>
				<?php get_template_part( 'template-parts/content-contact', get_post_format() ); ?>

				<?php wp_reset_postdata(); ?>

			<?php endwhile; // End of the loop.?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>