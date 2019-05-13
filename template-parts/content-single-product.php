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
		Color definition
		///////////////// 
		*/
		//call of custom product-main-color
		$main_color = types_render_field( "product-main-color", array( ) );
		//call of custom field product-title-color
		$title_color = types_render_field( "product-title-color", array( ) );
	?>

	<?php 
	/*
	/////////////////
	Hero section
	///////////////// 
	*/
	 ?>

	<section class="section-hero product-hero <?php if ( is_single('organic-cacao-powder') ) { echo 'product-hero--cacao'; } ?>" style="background-image:url('<?php echo types_render_field( "section-hero-background-image", array( "alt" => "", "url" => "true" ) ); ?>');">
		<div class="product-hero--wrapper">
			<div class="section-hero__content product-hero__content">
				<?php
					//call of custom field section-product-title-hero
					$section_product_title_hero = types_render_field( "section-product-title-hero", array( ) );
					//call of custom field section-product-description-hero
					$section_product_description_hero = types_render_field( "section-product-description-hero", array( ) );
				?>

				<?php if ( is_single('organic-cacao-powder') ) { // add a left-right movement to cacao ?>
					<div class="section-hero__logo">
						<img src="<?php bloginfo('template_directory'); ?>/img/logos-fairtrade-cacao.png" alt="USDA organic and Fair trade">
					</div>
				<?php } ?>

				<h2 class="section-hero__title"><?php echo $section_product_title_hero; ?></h2>
				
				<div class="section-hero__sub-title product-hero__sub-title">
					<?php echo $section_product_description_hero; ?>
				</div>
			</div>
		</div>
	</section><!-- .product-hero -->

	<section class="product-menu fixedsticky " id="js-sticky-menu" style="color:<?php echo esc_html( $main_color ); ?>">
		<div class="product-menu--wrapper clearfix">	
			<?php wp_nav_menu( array( 'theme_location' => 'sticky', 'menu_id' => 'sticky-menu', 'menu_class' => 'menu-items--sticky' ) ); ?>
		</div>
	</section>

	<?php 
	/*
	/////////////////
	Description section
	///////////////// 
	*/

	//call of custom product-parallax-section-title
	$product_parallax_section_title = types_render_field( "product-parallax-section-title", array( ) );
	//call of custom product-parallax-pouch-image
	$product_parallax_pouch_image = types_render_field( "product-parallax-pouch-image", array( "alt" => "", "url" => "true" ) );
	//call of custom product-parallax-pouch-content
	$product_parallax_pouch_content = types_render_field( "product-parallax-pouch-content", array( "alt" => "", "url" => "true" ) );
	?>
	
	<section id="js-product-description" class="product-description">

		<div class="product-description--wrapper">
			<div class="product-description__image <?php if ( is_single('organic-cacao-powder') || is_single('organic-nutritional-yeast') ) { echo 'product-description__image--spoon'; } ?>">

				<div id="js-parallaxDescription" class="">
					<div id="js-parallaxProduct" class="">
						<?php if ( is_single('organic-cacao-powder') || is_single('organic-nutritional-yeast') ) { // add a left-right movement to cacao ?>
							<img class="product-description__image-spoon" src="<?php echo esc_html( $product_parallax_pouch_content ); ?>" alt="Seed">
						<?php } else { ?>
							<img class="product-description__image-seed" src="<?php echo esc_html( $product_parallax_pouch_content ); ?>" alt="Seed">
						<?php } ?>
						<img class="product-description__image-pouch <?php if ( is_single('organic-cacao-powder') || is_single('organic-nutritional-yeast') ) { echo 'product-description__image-pouch--cacao'; } ?>" src="<?php echo esc_html( $product_parallax_pouch_image ); ?>" alt="Pouch">
					</div>
				</div>

			</div><!--
			
		--><div class="product-description__content">
				
				<h1 class="product-description__title" style="color:<?php echo esc_html( $title_color ); ?>" />	
					<?php echo $product_parallax_section_title; ?>
				</h1>

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

	?>

	<section id="js-parallax__trigger_1">
			<div id="js-parallaxBackground_1" class="section-banner" style="border-color:<?php echo esc_html( $main_color ); ?>; background-image:url('<?php echo types_render_field( "section-ingredients-image", array( "alt" => "", "url" => "true" ) ); ?>'); background-position: 0px -150px;">
				<h3 class="section-banner__title"><?php echo esc_html( $section_ingredients_product_title ); ?></h3>
			</div>
	</section><!-- .product-ingredients -->

	<section class="product-ingredients">

		<img class="home-product__ingredients <?php if ( is_single('organic-cacao-powder') ) { echo 'home-product__ingredients--cacao'; } ?>" src="<?php echo types_render_field( "section-ingredients-background-left-image", array( "alt" => "", "url" => "true" ) ); ?>">

		<div class="product-ingredients--wrapper">

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
					<img class="zoom" src="<?php echo $child_post->fields['ingredient-image']; ?>" data-magnify-src="<?php echo $child_post->fields['ingredient-image']; ?>" alt="<?php echo $child_post->post_title; ?>"><!--
				
				--><div class="product-ingredients__item-content">
						<div class="point-separator"></div>
						
						<h2 class="product-ingredients__item-title" style="color:<?php echo esc_html( $title_color ); ?>;"><?php echo $child_post->post_title; ?></h2>
						<div class="product-ingredients__item-description">
							<?php echo apply_filters( 'the_content', $child_post->post_content ); ?>
						</div>
					</div>
				</div>

			<?php } // End of the loop. ?>

			<?php wp_reset_postdata(); ?>

		</div>

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
		//call of custom field section-nutrition-image-disclaimer
		$section_nutrition_image_disclaimer = types_render_field( "section-nutrition-image-disclaimer", array( ) );
		//call of custom field section-nutrition-content-image
		$section_nutrition_content_disclaimer = types_render_field( "section-nutrition-content-disclaimer", array( ) );
	?>

	<section id="js-product-nutrition">
			<div id="js-parallaxBackground_2" class="section-banner" style="border-color: <?php echo esc_html( $main_color ); ?>; background-image:url('<?php echo types_render_field( "section-nutriton-banner-image", array( "alt" => "", "url" => "true" ) ); ?>'); background-position: 0px -150px;">
				<h3 class="section-banner__title"><?php echo esc_html( $section_nutrition_product_title ); ?></h3>
			</div>
	</section><!-- .product-nutrition -->


	<section class="product-nutrition">

		<div class="product-nutrition--wrapper">
			<div class="product-nutrition__content" style="color: <?php echo esc_html( $main_color ); ?>">
				<?php echo $section_nutrition_product_content; ?>
				
				<div class="product-nutrition__disclaimer disclaimer">
					<div class="product-nutrition__disclaimer-image"><?php echo $section_nutrition_image_disclaimer ?></div><!--
					
				--><div class="product-nutrition__disclaimer-content"><?php echo $section_nutrition_content_disclaimer ?></div>
				</div>
			</div><!--

		--><div class="product-nutrition__image">
				<?php
					//call of custom field contact-image
					$section_nutrition_product_image = types_render_field( "section-nutrition-product-image", array( "alt" => "Nutrition information", "title" => "" ) );
					echo $section_nutrition_product_image;
				?>
			</div>
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
		//call of custom field section-kitchen-disclaimer
		$section_kitchen_disclaimer = types_render_field( "section-kitchen-disclaimer", array( ) );
		//call of custom field section-recipes-page-link
		$section_recipes_page_link = types_render_field( "section-recipes-page-link", array( ) );
	?>

	<?php 
		//Kitchen section conditional
		if ( !empty( $section_kitchen_product_title ) ) { 
	?>

		<section id="js-product-kitchen">
				<div id="js-parallaxBackground_3" class="section-banner" style="border-color:<?php echo esc_html( $main_color ); ?>; background-image:url('<?php echo types_render_field( "section-kitchen-banner-image", array( "alt" => "", "url" => "true" ) ); ?>'); background-position: 0px -150px;">
					<h3 class="section-banner__title"><?php echo esc_html( $section_kitchen_product_title) ; ?></h3>
				</div>
		</section><!-- .product-kitchen -->

		<section class="product-kitchen">

			<div class="product-kitchen--wrapper">

				<?php 
					//Kitchen section conditional
					if ( !empty( $section_kitchen_disclaimer ) ) { 
				?>

					<div class="product-kitchen__content">
						
						<h3 class="product-kitchen__title title_dotted">
							<?php the_title(); ?>
						</h3>
						
						<div class="product-kitchen__content-wrapper">

							<div class="product-kitchen__content-item">
								<div class="product-kitchen__content-image">
									<?php echo types_render_field( "section-kitchen-product-image-1", array( "alt" => "Kitchen instructions", "title" => "" ) ); ?>
								</div><!--
							
							--><div class="product-kitchen__description">
									<?php echo types_render_field( "section-kitchen-instructions-content-1", array( ) ); ?>
								</div>	
							</div>

							<div class="product-kitchen__content-item">
								<div class="product-kitchen__content-image">
									<?php echo types_render_field( "section-kitchen-product-image-2", array( "alt" => "Kitchen instructions", "title" => "" ) ); ?>
								</div><!--
							
							--><div class="product-kitchen__description">
									<?php echo types_render_field( "section-kitchen-instructions-content-2", array( ) ); ?>
								</div>	
							</div>

							<div class="product-kitchen__content-item">
								<div class="product-kitchen__content-image">
									<?php echo types_render_field( "section-kitchen-product-image-3", array( "alt" => "Kitchen instructions", "title" => "" ) ); ?>
								</div><!--
							
							--><div class="product-kitchen__description">
									<?php echo types_render_field( "section-kitchen-instructions-content-3", array( ) ); ?>
								</div>	
							</div>

							<div class="product-kitchen__content-item">
								<div class="product-kitchen__content-image">
									<?php echo types_render_field( "section-kitchen-product-image-4", array( "alt" => "Kitchen instructions", "title" => "" ) ); ?>
								</div><!--
							
							--><div class="product-kitchen__description">
									<?php echo types_render_field( "section-kitchen-instructions-content-4", array( ) ); ?>
								</div>	
							</div>

							<div class="line-separator"></div>

						</div>

						<div class="product-kitchen__disclaimer disclaimer">
							<?php echo $section_kitchen_disclaimer; ?>
						</div>
					</div><!--

			--><?php } //end of Kitchen section conditional 

					//we will applied a different class if we don't have the recipes section
					$recipes_layout = '';
					if ( empty( $section_kitchen_disclaimer ) ) {
						$recipes_layout = 'product-kitchen__recipes_100';
					}

			?><!--

			--><div class="product-kitchen__recipes <?php echo $recipes_layout; ?>">

					<?php 
						//Kitchen section conditional
						if ( !empty( $section_kitchen_disclaimer ) ) { 
					?>
						<h3 class="product-kitchen__title title_dotted">
							<?php _e( 'Featured recipes', 'volupta') ?>
						</h3>
					<?php } //end of Kitchen section conditional ?>

					<div class="product-kitchen__recipes-wrapper">
						<?php
							// we create a for loop for callin all dishes children products: Ingredients
							$args_recipe = array(
								'order'				=> 'ASC',		// List in ascending order
								'posts_per_page'	=>   3, 		// Show all child-posts
								'orderby'      		=> 'id',		// List them in their menu order
							);

							$child_posts_recipe = types_child_posts('recipe', $args_recipe);
							//we create a counter varible to move the slider
							$count = '';
							foreach ($child_posts_recipe as $child_post) {
								$count = $count+1;
						?><!--
							--><div class="product-kitchen__recipes-item">
									<a href="<?php echo esc_url( $section_recipes_page_link ); ?>#<?php echo $count; ?>">
										<div class="product-kitchen__recipes-image">
											<?php echo get_the_post_thumbnail( $child_post->ID, 'full', $attr = '' ); ?>
										</div>
										<span><?php echo $child_post->post_title; ?></span>
									</a>
								</div><!--
						--><?php } // End of the loop. ?>
						<?php wp_reset_postdata(); ?>
					</div><!-- .product-kitchen__recipes-wrapper -->
				</div>
			</div>
		</section><!-- .product-kitchen -->	

	<?php } //end of Kitchen section conditional ?>

</article>

<?php wp_reset_postdata(); ?>

<?php //we call the circular navigation template ?>
<?php get_template_part( 'template-parts/content-product-nav', get_post_format() ); ?>
