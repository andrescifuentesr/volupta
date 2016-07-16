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
		<img src="<?php bloginfo('template_directory'); ?>/img/home-product.png" alt="">
	</div><!--
	
--><div class="home-products__content">
		<h3 class="home-products__title">lorem ipsum sit</h3>
		<p class="home-products__description">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse hendrerit mauris a efficitur consequat. Sed ex nibh, ultricies in nisl eget, commodo tempor lorem. Mauris enim mi, ornare non euismod vitae, pretium eget lorem. 
		</p>
		<button class="home-products__button">View products</button>
	</div>
</section><!-- .home-products -->


<section class="home-recipes">

	<?php //aquí va el loop ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


		<div class="flexslider-wrapper loading">

			<div class="spinner">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>

			<div id="flexslider-home" class="flexslider">
				<ul class="slides">
				    <li>
				    	<a href="">
					    	<img src="<?php bloginfo('template_directory'); ?>/img/home-dish.png" alt="">
					    </a>
						<div class="home-recipes__description">
							<h2 class="home-recipes__title">Ancient grains & vegetable salad</h2>
							<p class="home-recipes__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae eos laborum, velit quae eaque tempore, explicabo</p>
						</div>				    	
				    </li>

				    <li>
				    	<a href="">
					    	<img src="<?php bloginfo('template_directory'); ?>/img/home-dish.png" alt="">
					    </a>
						<div class="home-recipes__description">
							<h2 class="home-recipes__title">Ancient grains & vegetable salad</h2>
							<p class="home-recipes__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae eos laborum, velit quae eaque tempore, explicabo</p>
						</div>				    	
				    </li>
				</ul>
			</div>
		</div><!-- .flexslider-wrapper -->	
		


		<header class="entry-header">
<!-- 			<?php
				if ( is_single() ) {
					the_title( '<h1 class="entry-title">', '</h1>' );
				} else {
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				}
			?> -->
		</header><!-- .entry-header -->

		<div class="entry-content">
<!-- 			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'volupta' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			?> -->
		</div><!-- .entry-content -->

	</article><!-- #post-## -->

</section><!-- .home-recipes -->