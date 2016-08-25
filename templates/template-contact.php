<?php
/*
Template Name: Template Contact
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="about-contact">
				<div class="about-contact--wrapper">
					<div class="about-contact__item-content ">
						
						<h3 class="about-contact-section__title"><?php echo types_render_field( "section-contact-title", array( ) ); ?></h3>

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

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>