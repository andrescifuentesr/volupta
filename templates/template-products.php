<?php
/*
Template Name: Template Products
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="product-hero">
				<div class="product-hero__content">
					<h2 class="product-hero__title">lorem ipsum dolor</h2>
					<p class="product-hero__sub-title">Lorem ipsum dolor sit, consectetur adipiscing elit. Suspendisse hendrerit mauris a efficitur consequat. Sed ex nibh, ultricies in nisl eget, tempor lorem.</p>
				</div>
			</section><!-- .product-hero -->


			<section class="product-description">
				<div class="product-description__image">
					<img src="<?php bloginfo('template_directory'); ?>/img/home-product.png" alt="">
				</div><!--
				
			--><div class="product-description__content">
					<h3 class="product-description__title">lorem ipsum sit</h3>
					<p class="product-description__description">
						Our Organic Quinoa & Ancient Grains is gluten free and combines the nutrients of white and red quinoa, amaranth and millet, offering about45 grams of whole grains per serving. Volupta’s Quinoa and Ancient Grains blend has a fluffy, light consistency when cooked and a chewy, nutty texture that pairs well with stews and sauces. It can also be used to enhance salad. Despite the use of modern cleaning equipment, we recommend to rinse before cooking to remove any powder residue. <br><br>

						SUGGESTED USES <br>
						•      Gluten free alternative to pasta or rice. <br>
						•      Excellent for salads or tabbouleh. <br>
						•      Can be mixed with stews and sauces.<br>
					</p>
					<div class="line-separator"></div>
					<img src="<?php bloginfo('template_directory'); ?>/img/product-description-image.png" alt="">
				</div>
			</section><!-- .product-description -->

			<section class="product-banner">
				<img src="<?php bloginfo('template_directory'); ?>/img/bg-product-banner.jpg" alt="">
				<h3 class="product-ingredients__title">Ingredients</h3>
			</section><!-- .product-ingredients -->

			<section class="product-ingredients">
				<div class="product-ingredients__item">
					<img src="<?php bloginfo('template_directory'); ?>/img/product-ingredient-item.png" alt=""><!--
				
				--><div class="product-ingredients__item-content">
						<div class="point-separator"></div>
						<h3 class="product-ingredients__item-title">White Quinoa</h3>
						<p class="product-ingredients__item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus porro rem nihil maiores possimus nulla numquam mollitia, nemo deserunt voluptates, maxime, fugiat error nam. Dicta error iste, assumenda cum saepe.</p>
					</div>
				</div>
			</section><!-- .product-ingredients -->

			<section class="product-banner">
				<img src="<?php bloginfo('template_directory'); ?>/img/bg-product-banner.jpg" alt="">
				<h3 class="product-ingredients__title">Nutrition</h3>
			</section><!-- .product-nutrition -->

			<section class="product-nutrition">
				<div class="product-nutrition__content">
					<h3 class="product-nutrition__title">lorem ipsum sit</h3>
					<p class="product-nutrition__description">
						Our Organic Quinoa & Ancient Grains is gluten free and combines the nutrients of white and red quinoa, amaranth and millet, offering about45 grams of whole grains per serving. Volupta’s Quinoa and Ancient Grains blend has a fluffy, light consistency when cooked and a chewy, nutty texture that pairs well with stews and sauces. It can also be used to enhance salad. Despite the use of modern cleaning equipment, we recommend to rinse before cooking to remove any powder residue. <br><br>

						SUGGESTED USES <br>
						•      Gluten free alternative to pasta or rice. <br>
						•      Excellent for salads or tabbouleh. <br>
						•      Can be mixed with stews and sauces.<br>
					</p>
					<div class="line-separator"></div>
					<img src="<?php bloginfo('template_directory'); ?>/img/product-nutrition-image.png" alt="">
				</div><!--

			--><div class="product-nutrition__image">
					<img src="<?php bloginfo('template_directory'); ?>/img/product-nutriotion-image.jpg" alt="">
				</div>
			</section><!-- .product-nutrition -->

			<section class="product-banner">
				<img src="<?php bloginfo('template_directory'); ?>/img/bg-product-banner.jpg" alt="">
				<h3 class="product-ingredients__title">Kitchen</h3>
			</section><!-- .product-kitchen -->

			<?php
				$args = array(
					'post_type' 		=> 'products', 	//Costum type Proyectos			
					'order'				=> 'ASC',		// List in ascending order
					'orderby'      		=> 'id',		// List them in their menu order
					'posts_per_page'	=>   -1, 		// Show the last one
				);

				$QueryProducts = new WP_Query($args);
			?>

			<?php //while ($QueryProducts->have_posts()) : $QueryProducts->the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('recipe__product'); ?>>


				</article>
			
			<?php //endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>