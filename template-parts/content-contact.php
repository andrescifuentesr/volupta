<?php
/**
 * Template part for the contact form
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package volupta
 */

?>

<?php
	$args = array(
		'page_id'			=> 15 //id of page contact = 15
	);

	$QueryContact = new WP_Query($args);
?>

<?php while ($QueryContact->have_posts()) : $QueryContact->the_post(); ?>				

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
<?php endwhile; // End of the loop. ?>