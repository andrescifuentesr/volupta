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
							triggerElement: "#js-parallax__trigger_1", duration: 800, offset: -300})
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


			//=====================
			// Product animation
			//=====================
			//animation 1
			// build tween
			var producto1 = new TimelineMax ()
				.add([
					TweenMax.fromTo("#js-parallaxProduct .product-description__image-seed", 1, {top: '-100%'}, {top: '30%', ease: Linear.easeNone}),
					TweenMax.fromTo("#js-parallaxProduct .product-description__image-pouch", 1, {top: '150%'}, {top: '50%', ease: Linear.easeNone})

				]);
			// build scene
			var sceneproducto1 = new ScrollMagic.Scene({triggerElement: "#js-parallaxDescription", duration: 400, offset: -400})
							.setTween(producto1)
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
		var tweenPouch = TweenMax.fromTo("#js-parallaxContainer_1 .home-products__image-pouch", 1,
										{left: '-250%'},
										{left: '50%', ease: Linear.easeNone}
									);

		var pouch = new ScrollMagic.Scene({
								triggerElement: "#js-parallaxHome_1 .home-products__image-pouch", duration: 250, offset: -400 })
							.setTween(tweenPouch ) // trigger a TweenMax.to tween
							.addTo(controller);


		var tweenSeed = TweenMax.fromTo("#js-parallaxContainer_1 .home-products__image-seed", 1,
										{top: '-100%'},
										{top: '40%', ease: Linear.easeNone}
									);

		var seed = new ScrollMagic.Scene({
								triggerElement: "#js-parallaxHome_1", duration: 300, offset: -150 })
							.setTween(tweenSeed) // trigger a TweenMax.to tween
							.addTo(controller);


		var tweenText = TweenMax.fromTo("#js-parallaxHome_1 .home-products__content", 1,
										{opacity: 0},
										{opacity: 1, ease: Linear.easeNone}
									);

		var text = new ScrollMagic.Scene({
								triggerElement: "#js-parallaxHome_1 .home-products__content", duration: 200, offset: -50 })
							.setTween( tweenText ) // trigger a TweenMax.to tween
							.addTo(controller);

		//=====================
		// Home animations
		//=====================
		//animation 2
		// build tween

		var tweenPouch2 = TweenMax.fromTo("#js-parallaxContainer_2 .home-products__image-pouch", 1,
										{left: '250%'},
										{left: '50%', ease: Linear.easeNone}
									);

		var pouch2 = new ScrollMagic.Scene({
								triggerElement: "#js-parallaxHome_2 .home-products__image-pouch", duration: 250, offset: -400 })
							.setTween(tweenPouch2 ) // trigger a TweenMax.to tween
							.addTo(controller);


		var tweenSeed2 = TweenMax.fromTo("#js-parallaxContainer_2 .home-products__image-seed", 1,
										{top: '-100%'},
										{top: '40%', ease: Linear.easeNone}
									);

		var seed2 = new ScrollMagic.Scene({
								triggerElement: "#js-parallaxHome_2", duration: 300, offset: -150 })
							.setTween(tweenSeed2) // trigger a TweenMax.to tween
							.addTo(controller);


		var tweenText2 = TweenMax.fromTo("#js-parallaxHome_2 .home-products__content", 1,
										{opacity: 0},
										{opacity: 1, ease: Linear.easeNone}
									);

		var text2 = new ScrollMagic.Scene({
								triggerElement: "#js-parallaxHome_2 .home-products__content", duration: 200, offset: -50 })
							.setTween( tweenText2 ) // trigger a TweenMax.to tween
							.addTo(controller);	


		//=====================
		// Home animations
		//=====================
		//animation 3
		// build tween
		var tweenPouch3 = TweenMax.fromTo("#js-parallaxContainer_3 .home-products__image-pouch", 1,
										{left: '-250%'},
										{left: '50%', ease: Linear.easeNone}
									);

		var pouch3 = new ScrollMagic.Scene({
								triggerElement: "#js-parallaxHome_3 .home-products__image-pouch", duration: 250, offset: -400 })
							.setTween(tweenPouch3 ) // trigger a TweenMax.to tween
							.addTo(controller);


		var tweenSeed3 = TweenMax.fromTo("#js-parallaxContainer_3 .home-products__image-seed", 1,
										{top: '-100%'},
										{top: '40%', ease: Linear.easeNone}
									);

		var seed3 = new ScrollMagic.Scene({
								triggerElement: "#js-parallaxHome_3", duration: 300, offset: -150 })
							.setTween(tweenSeed3) // trigger a TweenMax.to tween
							.addTo(controller);


		var tweenText3 = TweenMax.fromTo("#js-parallaxHome_3 .home-products__content", 1,
										{opacity: 0},
										{opacity: 1, ease: Linear.easeNone}
									);

		var text3 = new ScrollMagic.Scene({
								triggerElement: "#js-parallaxHome_3 .home-products__content", duration: 200, offset: -50 })
							.setTween( tweenText3 ) // trigger a TweenMax.to tween
							.addTo(controller);	



		// var home1 = new TimelineMax ()
		// 	.add([
		// 		TweenMax.fromTo("#js-parallaxContainer_1 .home-products__image-seed", 1, {top: '-100%'}, {top: '40%', ease: Linear.easeNone}),
		// 		TweenMax.fromTo("#js-parallaxContainer_1 .home-products__image-pouch", 1, {left: '-350%'}, {left: '50%', ease: Linear.easeNone}),
		// 		TweenMax.fromTo("#js-parallaxHome_1 .home-products__content", 1, {opacity: '0'}, {opacity: '1', ease: Linear.easeNone})



		// 	]);
		// // build scene
		// var sceneHome1 = new ScrollMagic.Scene({triggerElement: "#js-parallaxHome_1", duration: 400, offset: -200})
		// 				.setTween(home1)
		// 				.addTo(controller);




		//animation 2
		// build tween
		// var home2 = new TimelineMax ()
		// 	.add([
		// 		TweenMax.fromTo("#js-parallaxContainer_2", 1, {backgroundPosition: "0 -100px"}, {backgroundPosition: "0 0px", ease: Linear.easeNone}),
		// 		TweenMax.fromTo("#js-parallaxContainer_2 .js-recipe__item", 1, {top: "150px"}, {top: "0", ease: Linear.easeNone})

		// 	]);

		// // build scene
		// var sceneHome2 = new ScrollMagic.Scene({triggerElement: "#js-parallaxContainer_2", duration: 400, offset: -250})
		// 				.setTween(home2)
		// 				.addTo(controller);
	</script>

<?php } ?>