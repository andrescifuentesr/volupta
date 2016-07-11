<?php
/*
Template Name: Template Recipes
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main site-recipes" role="main">

			<?php
				$args = array(
					'post_type' 		=> 'recipes', 	//Costum type Proyectos			
					'order'				=> 'ASC',		// List in ascending order
					'orderby'      		=> 'id',		// List them in their menu order
					'posts_per_page'	=>   -1, 		// Show the last one
				);

				$QueryRecipes = new WP_Query($args);
			?>

			<?php //while ($QueryRecipes->have_posts()) : $QueryRecipes->the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('recipe__item'); ?>>

					<div class="flexslider-wrapper loading">

						<div class="spinner">
							<div class="bounce1"></div>
							<div class="bounce2"></div>
							<div class="bounce3"></div>
						</div>

						<div id="flexslider-recipes" class="flexslider">
							<ul class="slides">
							    <li data-thumb="<?php bloginfo('template_directory'); ?>/img/home-dish.png">
							    	<a class="slides-img" href="">
								    	<img src="<?php bloginfo('template_directory'); ?>/img/home-dish.png" alt="">
								    </a><!--
								   --><div class="home-recipes__description">
										<h2 class="home-recipes__title">Ancient grains & vegetable salad</h2>
										<p class="home-recipes__subtitle">Prep Time: 10 mins  |  Cook Time: 25 mins |  Servings: 4</p>
										<p class="home-recipes__content">
											INGREDIENTS<br>
											1  cup Volupta Organic Quinoa & Ancient Grains<br>
											1  carrot <br>
											1  handful cherry tomatoes or 1 medium tomato<br>
											1  small broccoli chopped into small florets <br>
											½  bell pepper<br>
											 2  tbsp. olive oil <br>
											 ½  lemton <br>
										</p>
									</div>				    	
							    </li>

							    <li data-thumb="<?php bloginfo('template_directory'); ?>/img/home-dish.png">
							    	<a class="slides-img" href="">
								    	<img src="<?php bloginfo('template_directory'); ?>/img/home-dish.png" alt="">
								    </a><!--
								   --><div class="home-recipes__description">
										<h2 class="home-recipes__title">Ancient grains & vegetable salad</h2>
										<p class="home-recipes__subtitle">Prep Time: 10 mins  |  Cook Time: 25 mins |  Servings: 4</p>
										<p class="home-recipes__content">
											INGREDIENTS<br>
											1  cup Volupta Organic Quinoa & Ancient Grains<br>
											1  carrot <br>
											1  handful cherry tomatoes or 1 medium tomato<br>
											1  small broccoli chopped into small florets <br>
											½  bell pepper<br>
											 2  tbsp. olive oil <br>
											 ½  lemton <br>
										</p>
									</div>				    	
							    </li>
							</ul>
						</div>
					</div><!-- .flexslider-wrapper -->

				</article>
			
			<?php //endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>