<?php
/*
Template Name: Template Recipes Goji
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main site-recipes" role="main">

			<div class="site-recipes--wrapper">

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
										'post_type' 		=> 'product', 	//Costum type Recipe
										'p'					=>   1207, 		// Goji
									
									);

									$QueryRecipes = new WP_Query($args);
								?>
								<?php while ($QueryRecipes->have_posts()) : $QueryRecipes->the_post(); ?>

									<?php
										//call of custom product-main-color from the product page
										$main_color = types_render_field( "product-main-color", array( ) );
									?>


									<?php
										// we create a for loop for callin all dishes children products: Ingredients
										$args_recipe = array(
											'order'				=> 'ASC',		// List in ascending order
											'posts_per_page'	=>   3, 		// Show all child-posts
											'orderby'      		=> 'id',		// List them in their menu order
										);

										$child_posts_recipe = types_child_posts('recipe', $args_recipe);
										foreach ($child_posts_recipe as $child_post) {
									?>									

										<?php $thumbnail_nav = wp_get_attachment_image_src( get_post_thumbnail_id( $child_post->ID ), 'medium' ); ?>
										<li data-thumb="<?php echo esc_url( $thumbnail_nav[0] ); ?>" style="color:<?php echo esc_html( $main_color ); ?>">

											<div class="slides-img">
												<?php echo get_the_post_thumbnail( $child_post->ID, 'full', $attr = '' ); ?>
											</div><!--
										   --><div class="recipes__description">
												<h2 class="recipes__title"><?php echo $child_post->post_title; ?></h2>
												<p class="recipes__overview">
													<?php
														//call of custom field recipes-overview
														$page_recipes_overview = $child_post->fields['recipes-overview'];
														if( !empty( $page_recipes_overview ) ) {
															echo $page_recipes_overview;
														}
													?>
												</p>
												<div class="recipes__content">
													<?php echo apply_filters( 'the_content', $child_post->post_content ); ?>
												</div>
											</div>
										</li>

									<?php } // End of the loop. ?>

								<?php endwhile; // End of the loop. ?>

							</ul>
						</div>
					</div><!-- .flexslider-wrapper -->

				</article>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php //we call the circular navigation template ?>
	<?php get_template_part( 'template-parts/content-recipes-nav', get_post_format() ); ?>

<?php get_footer(); ?>