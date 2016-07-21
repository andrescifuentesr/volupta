<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package volupta
 */

?>

<section class="section-hero home-hero">
	<div class="section-hero__content">
		<h2 class="section-hero__title">lorem ipsum dolor</h2>
		<p class="section-hero__sub-title">sit amet conasectetur adipiscing elit</p>
	</div>
</section><!-- .home-hero -->

<section class="home-description">
	<p class="">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse hendrerit mauris a efficitur consequat. Sed ex nibh, ultricies in nisl eget, commodo tempor lorem. Mauris enim mi, ornare non euismod vitae, pretium eget lorem. 
	</p>
</section><!-- .home-description -->

<section class="home-products">
	<div class="home-products__image">
		<a href="<?php echo esc_url( get_permalink(43) ); ?>" rel="bookmark">
			<img src="<?php bloginfo('template_directory'); ?>/img/home-product.png" alt="">
		</a>
	</div><!--
	
--><div class="home-products__content">
		<h3 class="home-products__title">lorem ipsum sit</h3>
		<p class="home-products__description">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse hendrerit mauris a efficitur consequat. Sed ex nibh, ultricies in nisl eget, commodo tempor lorem. Mauris enim mi, ornare non euismod vitae, pretium eget lorem. 
		</p>
		<a class="home-products__button" href="<?php echo esc_url( get_permalink(43) ); ?>" rel="bookmark">
			<?php _e('View products', 'volupta') ?>
		</a>
	</div>
</section><!-- .home-products -->

<section class="home-recipes" style="background-image:url('<?php bloginfo('template_directory'); ?>/img/bg-recipe-wood.jpg');" data-100-top="background-position:0px 0px;" data-1000-top="background-position: 0px -150px;">
	
<!-- <section class="home-recipes"> -->

	<?php //aquí va el loop ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-0-top="transform:translate3d(0px, 0px, 0px)" data-800-top="transform:translate3d(0px, 150px, 0px)">

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
							'posts_per_page'	=>   -1, 		// Show the last one
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
								<p class="home-recipes__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae eos laborum, velit quae eaque tempore, explicabo</p>
							</div>				    	
						</li>

					<?php endwhile; // End of the loop. ?>
				</ul>
			</div>
		</div><!-- .flexslider-wrapper -->	

	</article><!-- #post-## -->

</section><!-- .home-recipes -->