<?php
/**
 * Template part for triger JavaScript
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package volupta
 */

?>

<?php if ( 
		is_page_template( 'templates/template-quality.php' ) 
		|| is_page_template( 'templates/template-about.php' ) 
		|| is_singular('product')
) { ?>

	<script>
		var controller = new ScrollMagic.Controller();

		//=====================
		// Banner animations
		//=====================

		// build scene
		var scene = new ScrollMagic.Scene({
							triggerElement: "#js-product-ingredients", duration: 800, offset: -300})
						.setTween("#js-parallaxBackground_1", 0.5, {backgroundPosition: "0px 0px"}) // trigger a TweenMax.to tween
						.addTo(controller);
	</script>

	<?php if ( is_singular('product') ) { // add a couple of scenes for the product page ?>

		<script>
			var scene2 = new ScrollMagic.Scene({
								triggerElement: "#js-product-nutrition", duration: 800, offset: -300 })
							.setTween("#js-parallaxBackground_2", 0.5, {backgroundPosition: "0px 0px"}) // trigger a TweenMax.to tween
							.addTo(controller);

			var scene3 = new ScrollMagic.Scene({
								triggerElement: "#js-product-kitchen", duration: 800, offset: -300 })
							.setTween("#js-parallaxBackground_3", 0.5, {backgroundPosition: "0px 0px"}) // trigger a TweenMax.to tween
							.addTo(controller);
		</script>

	<?php }  ?>

<?php } elseif ( is_page_template( 'templates/template-home.php' ) ) { ?>

	<script>
		var controller = new ScrollMagic.Controller();
		//=====================
		// Home animations
		//=====================
		//animation 1
		// build tween
		var home1 = new TimelineMax ()
			.add([
				TweenMax.fromTo("#js-parallaxContainer_1 .home-products__image-seed", 1, {top: '-100%'}, {top: '40%', ease: Linear.easeNone}),
				TweenMax.fromTo("#js-parallaxContainer_1 .home-products__image-pouch", 1, {top: '150%'}, {top: '50%', ease: Linear.easeNone})

			]);
		// build scene
		var sceneHome1 = new ScrollMagic.Scene({triggerElement: "#js-parallaxHome_1", duration: 400, offset: -200})
						.setTween(home1)
						.addTo(controller);

		//animation 2
		// build tween
		var home2 = new TimelineMax ()
			.add([
				TweenMax.fromTo("#js-parallaxContainer_2", 1, {backgroundPosition: "0 -100px"}, {backgroundPosition: "0 0px", ease: Linear.easeNone}),
				TweenMax.fromTo("#js-parallaxContainer_2 .js-recipe__item", 1, {top: "150px"}, {top: "0", ease: Linear.easeNone})

			]);

		// build scene
		var sceneHome2 = new ScrollMagic.Scene({triggerElement: "#js-parallaxContainer_2", duration: 400, offset: -250})
						.setTween(home2)
						.addTo(controller);
	</script>

<?php } ?>