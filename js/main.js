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