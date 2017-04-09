<?php
/**
 * Template part for displaying the circular navigation at the bottom of products
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package volupta
 */

?>


<nav class="nav-infinite">
	<ul>
		<?php 
		/**
		 *  Infinite next and previous post looping in WordPress
		 http://wplancer.com/infinite-next-and-previous-post-looping-in-wordpress/
		 */

		 //check if there is a next to post
		$next_post = get_adjacent_post(false, '', true);

		if( !empty( $next_post ) ) {
			

			//I get the ID of the next post
			$next_post_id = $next_post->ID;

			$next = new WP_Query( array( 'p' => $next_post_id, 'post_type' => 'product'  ) ); $next->the_post();				

			//recover color of next post
			$main_color = types_render_field( "product-main-color", array( ) );

			the_title( '<li clas="nav-item" style="color: ' . esc_html( $main_color ) . ' ">
								<a href="' . esc_url( get_permalink() ) . '"><span>', '</span></a>
							</li>' );
				
			wp_reset_query();
			
		//if there is not a next post, I look for the first one
		} else {
		    $first = new WP_Query('post_type=product&posts_per_page=1&order=DESC'); $first->the_post();
				$main_color = types_render_field( "product-main-color", array( ) );
				the_title( '<li clas="nav-item" style="color: ' . esc_html( $main_color ) . ' ">
								<a href="' . esc_url( get_permalink() ) . '"><span>', '</span></a>
							</li>' );
			wp_reset_query();
		}; 

		//check if there is a prev to post
		$prev_post = get_adjacent_post(false, '', false);

		if( !empty( $prev_post ) ) {

			//I get the ID of the prev post
			$prev_post_id = $prev_post->ID;

			$prev = new WP_Query( array( 'p' => $prev_post_id, 'post_type' => 'product'  ) ); $prev->the_post();

			//recover color of prev post
			$main_color = types_render_field( "product-main-color", array( ) );

			the_title( '<li clas="nav-item" style="color: ' . esc_html( $main_color ) . ' ">
					<a href="' . esc_url( get_permalink() ) . '"><span>', '</span></a>
				</li>' );

			wp_reset_query();

		//if there is not a prev post, I look for the last one
		} else { 
			$last = new WP_Query('post_type=product&posts_per_page=1&order=ASC'); $last->the_post();
		    	$main_color = types_render_field( "product-main-color", array( ) );
				the_title( '<li clas="nav-item" style="color: ' . esc_html( $main_color ) . ' ">
								<a href="' . esc_url( get_permalink() ) . '"><span>', '</span></a>
							</li>' );
		    wp_reset_query();
		}; 

		?>
	</ul>
</nav>