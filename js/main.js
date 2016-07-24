//https://github.com/Prinzhorn/skrollr
//initialise skrollr
skrollr.init({
	// smoothScrolling: false,
	mobileDeceleration: 0.004
});

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

	//https://github.com/thdoan/magnify
	//we launch the magnify effect
	jQuery('.zoom').magnify();

	//Product page: sticky menu
	//https://github.com/filamentgroup/fixed-sticky
	jQuery( '#js-sticky-menu' ).fixedsticky();

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
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});