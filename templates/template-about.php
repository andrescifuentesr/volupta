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
						<p class="">
							<?php echo types_render_field( "section-about-us-introduction", array( ) ); ?>
						</p>
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

				<section class="section-banner about-banner" style="background-image:url('<?php echo types_render_field( "section-thefaq-image", array( "alt" => "", "url" => "true" ) ); ?>');" data-100-top="background-position:0px -150px;" data-1000-top="background-position: 0px 0px;">
					<h3 class="section-banner__title">
						<?php echo types_render_field( "section-thefaq-title", array( ) ); ?>
					</h3>
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

				<section class="section-banner about-banner" style="background-image:url('<?php echo types_render_field( "section-contact-image", array( "alt" => "", "url" => "true" ) ); ?>');" data-100-top="background-position:0px -150px;" data-1000-top="background-position: 0px 0px;">
					<h3 class="section-banner__title
					"><?php echo types_render_field( "section-contact-title", array( ) ); ?></h3>
				</section><!-- .about-questions -->

				<section class="about-contact">
					<div class="about-contact--wrapper">
						<div class="about-contact__item-content ">
							<div class="about-contact__text title_dotted">
								<?php echo types_render_field( "section-contact-content", array( ) ); ?>
							</div>
							<div class="about-contact__adresses">
								<span class="about-contact__title"><?php echo types_render_field( "section-contact-adress-title", array( ) ); ?></span><br/>
								<?php echo types_render_field( "section-contact-adress-content", array( ) ); ?>
							</div>
							<div class="about-contact__adresses title_dotted-bas">
								<span class="about-contact__title"><?php echo types_render_field( "section-email-title", array( ) ); ?></span><br/>
								<a href="mailto:info@volupta.com"><?php echo types_render_field( "section-email-adress", array( ) ); ?></a>
							</div>
						</div><!--
						--><div class="about-contact__form">
							    <?php echo do_shortcode('[contact-form-7 id="41" title="Contact form 1"]'); ?>
						</div>
					</div>
				</section>

			<?php endwhile; // End of the loop.?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>