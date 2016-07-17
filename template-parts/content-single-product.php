<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package volupta
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php 
	/*
	/////////////////
	Hero section
	///////////////// 
	*/
	 ?>
	<section class="section-hero product-hero">
		<div class="section-hero__content product-hero__content">
			<?php
				//call of custom field section-product-title-hero
				$section_product_title_hero = types_render_field( "section-product-title-hero", array( ) );
				//call of custom field section-product-description-hero
				$section_product_description_hero = types_render_field( "section-product-description-hero", array( ) );
			?>

			<h2 class="section-hero__title"><?php echo esc_html( $section_product_title_hero ); ?></h2>
			
			<div class="section-hero__sub-title product-hero__sub-title">
				<?php echo $section_product_description_hero; ?>
			</div>
		</div>
	</section><!-- .product-hero -->

	<?php 
	/*
	/////////////////
	Description section
	///////////////// 
	*/
	 ?>
	<section class="product-description">
		<div class="product-description__image">
			<?php the_post_thumbnail( 'full' ); ?>
		</div><!--
		
	--><div class="product-description__content">
			<?php the_title( '<h1 class="product-description__title">', '</h1>' ); ?>
			<div class="product-description__description">
		 		<?php
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'volupta' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
				?>
			</div>
		</div>
	</section><!-- .product-description -->

	<?php 
	/*
	/////////////////
	Ingredients section
	///////////////// 
	*/
	 ?>
	 <?php
		//call of custom section-ingredients-product-title
		$section_ingredients_product_title = types_render_field( "section-ingredients-product-title", array( ) );
		//call of custom field ingredient_image-nutrition-product-image
		$ingredient_image = types_render_field( "ingredient-image", array( ) );
	?>

	<section class="section-banner" style="background-image:url('<?php bloginfo('template_directory'); ?>/img/bg-product-banner.jpg');" data-100-top="background-position:0px 0px;" data-1000-top="background-position: 0px 50px;">
		<h3 class="section-banner__title"><?php echo esc_html( $section_ingredients_product_title ); ?></h3>
	</section><!-- .product-ingredients -->

	<section class="product-ingredients">

			<?php
			// we create a for loop for callin all dishes children products: Ingredients
			$args_menu = array(
				'order'				=> 'ASC',		// List in ascending order
				'posts_per_page'	=>   -1, 		// Show all child-posts
				'orderby'      		=> 'id',		// List them in their menu order
			);

			$child_posts = types_child_posts('ingredient', $args_menu);
			foreach ($child_posts as $child_post) {
		?>

			<div class="product-ingredients__item">
				<img src="<?php echo $child_post->fields['ingredient-image']; ?>" alt="<?php echo $child_post->post_title; ?>"><!--
			
			--><div class="product-ingredients__item-content">
					<div class="point-separator"></div>
					
					<h2 class="product-ingredients__item-title"><?php echo $child_post->post_title; ?></h2>
					<div class="product-ingredients__item-description">
						<?php echo apply_filters( 'the_content', $child_post->post_content ); ?>
					</div>
				</div>
			</div>

		<?php } // End of the loop. ?>

		<?php wp_reset_postdata(); ?>

	</section><!-- .product-ingredients -->

	<?php 
	/*
	/////////////////
	Nutrition section
	///////////////// 
	*/
	 ?>
	<?php
		//call of custom field content
		$section_nutrition_product_title = types_render_field( "section-nutrition-product-title", array( ) );
		//call of custom field section-nutrition-product-content
		$section_nutrition_product_content = types_render_field( "section-nutrition-product-content", array( ) );
		//call of custom field section-nutrition-product-image
		$section_nutrition_product_image = types_render_field( "section-nutrition-product-image", array( ) );
	?>
	<section class="section-banner" style="background-image:url('<?php bloginfo('template_directory'); ?>/img/bg-product-banner.jpg');" data-100-top="background-position:0px 0px;" data-1000-top="background-position: 0px 50px;">
			<?php if( !empty( $section_nutrition_product_title ) ) { ?>
				<h3 class="section-banner__title"><?php echo esc_html( $section_nutrition_product_title ); ?></h3>
			<?php } ?>
		</h3>
	</section><!-- .product-nutrition -->

	<section class="product-nutrition">
		<div class="product-nutrition__content">
			<?php echo $section_nutrition_product_content; ?>
		</div><!--

	--><div class="product-nutrition__image">
			<?php
				//call of custom field contact-image
				$section_nutrition_product_image = types_render_field( "section-nutrition-product-image", array( "alt" => "Nutrition information", "title" => "" ) );
				echo $section_nutrition_product_image;
			?>
		</div>
	</section><!-- .product-nutrition -->

	<?php 
	/*
	/////////////////
	Kitchen section
	///////////////// 
	*/
	 ?>
	 <?php
		//call of custom field section-kitchen-product-title
		$section_kitchen_product_title = types_render_field( "section-kitchen-product-title", array( ) );
		//call of custom field section-kitchen-product-content
		$section_kitchen_product_content = types_render_field( "section-kitchen-product-content", array( ) );
		//call of custom field section-kitchen-product-image
		$section_kitchen_product_image = types_render_field( "section-kitchen-product-image", array( "alt" => "Kitchen instructions", "title" => "" ) );
	?>
	<section class="section-banner" style="background-image:url('<?php bloginfo('template_directory'); ?>/img/bg-product-banner.jpg');" data-100-top="background-position:0px 0px;" data-1000-top="background-position: 0px 50px;">
		<h3 class="section-banner__title"><?php echo esc_html( $section_kitchen_product_title) ; ?></h3>
	</section><!-- .product-kitchen -->

	<section class="product-kitchen">
		<div class="product-kitchen__content">
			
			<h3 class="product-kitchen__title title_dotted">Organic quinoa & ancient grains</h3>
			<div>
				<?php echo $section_kitchen_product_image; //call of custom field contact-image ?><!--
			
			--><div class="product-kitchen__description">
					<?php //echo $section_kitchen_product_content; ?>
					<p>
						Place 1 cup of grains and 2 cups of water or broth in a saucepan and bring to boil. (for fluffier/looser texture, use less liquid)
					</p>

					<br><br><br>

					<p>Reduce heat to low and cover.</p>

					<br><br><br>

					<p>Cook for 15-20 minutes and remove from heat. (frequent stirring is recommended)</p>

					<br><br><br>

					<p>Fluff with a fork and serve. </p>
				</div>

				<div class="line-separator"></div>

			</div>

			<p class="product-kitchen__disclaimer">STORAGE INFORMATION: TO PRESERVE FRESHNESS AND QUALITY,  THIS PRODUCT SHOULD BE STORED IN A COOL, DRY PLACE AWAY FROM SUNLIGHT PRIOR TO COOKING.</p>
		</div><!--

	--><div class="product-kitchen__recipes">

			<h3 class="product-kitchen__title title_dotted"><?php _e( 'Featured recipes', 'volupta') ?></h3>

			<div class="product-kitchen__recipes-wrapper">

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

					<div class="product-kitchen__recipes-item">
						<a href="<?php the_permalink(); ?>">
							<img class="product-kitchen__recipes-image" src="<?php bloginfo('template_directory'); ?>/img/produc-recipe-item.png" alt="">
							<?php the_title( '<span>', '</span>' ); ?>
						</a>
					</div>

				<?php endwhile; // End of the loop. ?>

			</div><!-- .product-kitchen__recipes-wrapper -->

		</div>
	</section><!-- .product-kitchen -->	

</article>