//========================
//  Flexslider
//========================
jQuery(window).load(function(){

	//http://stackoverflow.com/questions/11384472/hash-url-navigation-with-a-flexslider
	//set some variables for calculating the hash
	var index = 0, hash = window.location.hash;

	//via malsup (Cycle plugin), calculates the hash value

	if (hash) {
		index = /\d+/.exec(hash)[0];
		index = (parseInt(index) || 1) - 1;
	}

	//slider page recipes
	jQuery("#flexslider-recipes").flexslider({
		animation:"slide",
		controlNav: "thumbnails",
		slideshow: false,
		touch: false,
		startAt: index, //now foo.html#3 will load item 3
		after:function(slider){
			window.location.hash = slider.currentSlide+1;
			//now when you navigate, your location updates in the URL
		},
		start:function(){
			jQuery(".site-recipes").find(".flexslider-wrapper").removeClass("loading");
			jQuery(".spinner").hide();
		}
	});

	// //Flexslider bottom recipes navigation
	// jQuery("#js-flexslider-recipes-nav").flexslider({
	// 	animation:"slide",
	// 	slideshow: false,
	// 	controlNav: false,
	// 	itemWidth: 250,
	// 	minItems: 1,
	// 	maxItems: 5,
	// 	start:function(){
	// 		jQuery(".site-recipes").find(".flexslider-wrapper").removeClass("loading");
	// 		jQuery(".spinner").hide();
	// 	}
	// });	

	//https://github.com/thdoan/magnify
	//we launch the magnify effect
	jQuery('.zoom').magnify();

	//Product page: sticky menu
	//https://github.com/filamentgroup/fixed-sticky
	jQuery( '#js-sticky-menu' ).fixedsticky();

	//adding an active clasee to the sticky menu
	jQuery('#js-sticky-menu a').on('click', function() {
		jQuery( "#js-sticky-menu a" ).removeClass('sticky-menu--active');
		jQuery( this ).toggleClass('sticky-menu--active');
	});
	

});

//JS for a smooth anchor scroll
//https://css-tricks.com/snippets/jquery/smooth-scrolling/
jQuery(function() {
	jQuery('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = jQuery(this.hash);
			target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				jQuery('html, body').animate({
					scrollTop: target.offset().top - 132
				}, 1000);
				return false;
			}
		}
	});
});


//=============================
//=====   FlexSlider Recipes
//=============================
(function() {

	// store the slider in a local variable
	var Recipes = jQuery(window),
				flexslider = { vars:{} };

	// tiny helper function to add breakpoints
	function getGridSize() {
		return (window.innerWidth <= 440) ? 1 :
				(window.innerWidth <= 700 && window.innerWidth >= 441  ) ? 2 :
				(window.innerWidth <= 850 && window.innerWidth >= 701  ) ? 3 :
				(window.innerWidth <= 1200 && window.innerWidth >= 851  ) ? 4 : 5;
	}
 
	Recipes.load(function() {
		jQuery("#js-flexslider-recipes-nav").flexslider({
			animation: "slide",
			slideshow: false,
			itemWidth: 250,
			controlNav: false,
			// move : 2,
			minItems: getGridSize(), // use function to pull in initial value
			maxItems: getGridSize(), // use function to pull in initial value
			start: function(slider){
				jQuery(".site-recipes").find(".flexslider-wrapper").removeClass("loading");
				jQuery(".spinner").hide();
			}
		});
	});
 
	// check grid size on resize event
	Recipes.resize(function() {
		var gridSize = getGridSize();

		flexslider.vars.minItems = gridSize;
		flexslider.vars.maxItems = gridSize;
	});

}());


//=============================
//=====   FlexSlider Products
//=============================
(function() {

	// store the slider in a local variable
	var Products = jQuery(window),
				flexslider = { vars:{} };

	// tiny helper function to add breakpoints
	function getGridSizeProducts() {
		return (window.innerWidth <= 440) ? 1 :
				(window.innerWidth <= 850 && window.innerWidth >= 441  ) ? 2 : 3;
	}
 
	Products.load(function() {
		jQuery("#js-flexslider-products-nav").flexslider({
			animation: "slide",
			slideshow: false,
			itemWidth: 250,
			controlNav: false,
			move : 1,
			minItems: getGridSizeProducts(), // use function to pull in initial value
			maxItems: getGridSizeProducts(), // use function to pull in initial value
			start: function(slider){
				jQuery(".site-recipes").find(".flexslider-wrapper").removeClass("loading");
				jQuery(".spinner").hide();
			}
		});
	});
 
	// check grid size on resize event
	Products.resize(function() {
		var gridSizeProducts = getGridSizeProducts();

		flexslider.vars.minItems = gridSizeProducts;
		flexslider.vars.maxItems = gridSizeProducts;
	});

}());