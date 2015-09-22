$(document).ready(function() {
	// cache the element
	var navBar = $('.menu');

	// find original navigation bar position
	var navPos = navBar.offset().top;
	
	// on scroll
	$(window).scroll(function() {
		fixedMenu();
	});

	//Slide toggle mobile menu
	$('.menu button').click(function() {
		$('.main-menu').slideToggle("fast");
	});

	//Set menu class to fixed on scrollevent
	function fixedMenu() {
		// get scroll position from top of the page
		var scrollPos = $(this).scrollTop();

		// check if scroll position is >= the nav position
		if (scrollPos >= navPos) {
		    navBar.addClass('fixed');
		} else {
		    navBar.removeClass('fixed');
		}
	}

	$(".fancybox").fancybox();
});



