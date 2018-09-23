<?php
/**
 * Template part for displaying the circular navigation at the bottom of products
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package volupta
 */

?>

<?php
	/*
	/////////////////
	Color definition
	///////////////// 
	*/
	//call of custom product-main-color
	$main_color = types_render_field( "product-main-color", array( ) );
	//call of custom field product-title-color
	$title_color = types_render_field( "product-title-color", array( ) );
?>

<nav class="nav-products" style="background:<?php echo esc_html( $main_color ); ?>">

	<h3 class="section-nav__title"><?php _e('Other Products', 'volupta'); ?></h3>

	<div class="flexslider-wrapper loading">

		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>

		<div id="js-flexslider-products-nav" class="flexslider">
			<ul class="slides">	
				<?php
					
					//we get the ID of the current post
					$currentID = get_the_ID();

					$args = array(
						'post_type' 		=> 'product', 	//Costum type product			
						'order'				=> 'ASC',		// List in ascending order
						'orderby'      		=> 'modified',		// List them in their menu order
						// 'posts_per_page'	=>   3, 		// Show the last one
						// 'post__not_in' 		=> array($currentID)
					);

					$QueryRecipes = new WP_Query($args);
				
					while ($QueryRecipes->have_posts()) : $QueryRecipes->the_post();
						//product poche
						$product_parallax_pouch_image = types_render_field( "product-parallax-pouch-image", array( "alt" => "", "url" => "true" ) );
				?><!--
				--><li>
						<a href="<?php the_permalink(); ?>">
							<img class="product-description__image-pouch" src="<?php echo esc_html( $product_parallax_pouch_image ); ?>" alt="Pouch">
						</a>
					</li><!--
			--><?php endwhile; // End of the loop. ?>
				<?php wp_reset_postdata(); ?>
			</ul>
		</div>
	</div><!-- .flexslider-wrapper -->
</nav>