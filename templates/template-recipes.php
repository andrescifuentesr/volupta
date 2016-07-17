<?php
/*
Template Name: Template Recipes
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main site-recipes" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class('recipe__item'); ?>>

				<div class="flexslider-wrapper loading">

					<div class="spinner">
						<div class="bounce1"></div>
						<div class="bounce2"></div>
						<div class="bounce3"></div>
					</div>

					<div id="flexslider-recipes" class="flexslider">
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

								<li data-thumb="<?php the_post_thumbnail_url( 'medium' ); ?>">
									<div class="slides-img">
										<?php the_post_thumbnail( 'full' ); ?>
									</div><!--
								   --><div class="recipes__description">
										<?php the_title( '<h2 class="recipes__title">', '</h2>' ); ?>
										<p class="recipes__overview">
											<?php
												//call of custom field recipes-overview
												$page_recipes_overview = types_render_field( "recipes-overview", array( ) );
												if( !empty( $page_recipes_overview ) ) {
													echo $page_recipes_overview;
												}
											?>
										</p>
										<div class="recipes__content">
											<?php the_content(); ?>
										</div>
									</div>				    	
								</li>

							<?php endwhile; // End of the loop. ?>

						</ul>
					</div>
				</div><!-- .flexslider-wrapper -->

			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>