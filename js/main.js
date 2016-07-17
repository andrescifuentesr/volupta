//========================
//  Flexslider
//========================
jQuery(window).load(function(){
	//slider page home
	jQuery("#flexslider-home").flexslider({
		animation:"slide",
		controlNav: false,
		slideshow: false,
		start:function(){
			jQuery(".site-main").find(".flexslider-wrapper").removeClass("loading");
			jQuery(".spinner").hide();
		}
	});

	//slider page recipes
	jQuery("#flexslider-recipes").flexslider({
		animation:"slide",
		controlNav: "thumbnails",
		slideshow: false,
		start:function(){
			jQuery(".site-recipes").find(".flexslider-wrapper").removeClass("loading");
			jQuery(".spinner").hide();
		}
	});
});

//https://github.com/Prinzhorn/skrollr
//initialise skrollr
skrollr.init({
	// smoothScrolling: false,
	mobileDeceleration: 0.004
});
