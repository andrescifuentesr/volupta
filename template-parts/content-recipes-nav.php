<?php
/**
 * Template part for displaying the circular navigation at the bottom of recipes
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package volupta
 */

?>

<nav class="nav-recipes">

	<h3 class="section-nav__title"><?php _e('Other Recipes', 'volupta'); ?></h3>

	<div class="flexslider-wrapper loading">

		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>

		<div id="js-flexslider-recipes-nav" class="flexslider">
			<ul class="slides">
				<?php
					//we get the ID of the current post
					$currentID = get_the_ID();

					$args = array(
						'post_type' 		=> 'recipe', 	//Costum type recipes			
						'order'				=> 'ASC',		// List in ascending order
						'orderby'      		=> 'id',		// List them in their menu order
						// 'posts_per_page'	=>   5, 		// 
						'post_status'      	=> 'publish', 	// avoid publishing draft recipes
						'post__not_in' 		=> array($currentID)
					);

					$QueryRecipes = new WP_Query($args);
				
					while ($QueryRecipes->have_posts()) : $QueryRecipes->the_post();
						
				?><!--
				--><li>
						<?php 
							//call of custom field recipes-archive
							$recipe_archive = types_render_field( "recipes-archive", array( ) );
	 					?>
						<a class="nav-recipes-item--link" href="<?php echo $recipe_archive; ?>">
							<?php the_post_thumbnail( 'thumbnail' ); ?>
							<span class="nav-recipes-item--title"><?php the_title(); ?></span>
						</a>
					</li><!--
			--><?php endwhile; // End of the loop. ?>
				<?php wp_reset_postdata(); ?>
			</ul>
		</div>
	</div><!-- .flexslider-wrapper -->
</nav>