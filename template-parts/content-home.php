<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package volupta
 */

?>

<section class="section-hero home-hero" style="background-image:url('<?php the_post_thumbnail_url(); ?>');">
	<div class="section-hero__content">
		<?php the_content(); ?>
	</div>
</section><!-- .home-hero -->


<?php 
	//call of custom home-section-introduction-content
	$home_section_introduction_content = types_render_field( "home-section-introduction-content", array( ) );
	//call of custom section-home-product-title
	$section_home_product_title = types_render_field( "section-home-product-title", array( ) );
	//call of custom section-home-product-content
	$section_home_product_content = types_render_field( "section-home-product-content", array( ) );
?>

<section class="home-description">
	<div class="home-description--wrapper">
		<div class="typl8-pull-quote"><?php echo $home_section_introduction_content; ?></div>
	</div>
</section><!-- .home-description -->

<section class="home-products">
	<div id="js-parallaxHome_1" class="home-products--wrapper">
		<div id="js-parallaxContainer_1" class="home-products__image">
			<a href="<?php echo esc_url( get_permalink(43) ); ?>" rel="bookmark">
				<img class="home-products__image-seed" src="<?php bloginfo('template_directory'); ?>/img/AGB-parralax-mix.png" alt="Seed">
				<img class="home-products__image-pouch" src="<?php bloginfo('template_directory'); ?>/img/home-product.png" alt="Pouch">
			</a>
		</div><!--
		
	--><div class="home-products__content">
			<h3 class="home-products__title">
				<?php echo $section_home_product_title; ?>
			</h3>
			<div class="home-products__description">
				<?php echo $section_home_product_content; ?>
			</div>
			<a class="home-products__button" href="<?php echo esc_url( get_permalink(43) ); ?>" rel="bookmark">
				<?php _e('View products', 'volupta') ?>
			</a>
		</div>
	</div>
</section><!-- .home-products -->

<section id="js-parallaxContainer_2" class="home-recipes" style="background-image:url('<?php bloginfo('template_directory'); ?>/img/bg-recipe-wood.jpg');">


	<article id="post-<?php the_ID(); ?>" <?php post_class('js-recipe__item'); ?> data-500-top="transform:translate3d(0px, 0px, 0px)" data-1000-top="transform:translate3d(0px, 150px, 0px)">

		<div class="flexslider-wrapper loading">

			<div class="spinner">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>

			<div id="flexslider-home" class="flexslider">
				<ul class="slides">
					<?php
						$args = array(
							'post_type' 		=> 'recipe', 	//Costum type Recipe			
							'order'				=> 'ASC',		// List in ascending order
							'orderby'      		=> 'id',		// List them in their menu order
							'posts_per_page'	=>   3, 		// Show the last one
						);

						$QueryRecipes = new WP_Query($args);
					?>
					<?php while ($QueryRecipes->have_posts()) : $QueryRecipes->the_post(); ?>				
						
						<li>
							<a href="<?php echo esc_url( get_permalink(9) ); ?>" rel="bookmark">
								<?php the_post_thumbnail( 'full' ); ?>
						    </a>
							<div class="home-recipes__description">
								<?php the_title( '<h2 class="home-recipes__title">', '</h2>' ); ?>

								<?php
									//call of custom field recipes-overview
									$page_home_page_description_recipe = types_render_field( "recipes-description-home-page", array( ) );
								?>
								<p class="home-recipes__content">
									<?php 
										if( !empty( $page_home_page_description_recipe ) ) {
											echo $page_home_page_description_recipe;
										}
									?>
								</p>
							</div>				    	
						</li>

					<?php endwhile; // End of the loop. ?>
				</ul>
			</div>
		</div><!-- .flexslider-wrapper -->	

	</article><!-- #post-## -->

</section><!-- .home-recipes -->