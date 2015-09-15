$(document).ready(function() {
	console.log("hello");
	var stickyNavTop = $('.sticky-menu').offset().top;
 
	var stickyNav = function(){
	var scrollTop = $(window).scrollTop();
      
	if (scrollTop > stickyNavTop) { 
    	$('.sticky-menu').addClass('sticky');
    	$('.navigation-menu').addClass('navigation-menu-sticky');
    	$('.sticky').removeClass('sticky-menu');
	} else {
    	$('.sticky-menu').removeClass('sticky');
    	$('.navigation-menu').removeClass('navigation-menu-sticky');
    	$('.sticky').addClass('sticky-menu'); 
	}
};
 
	stickyNav();
 
$(window).scroll(function() {
    stickyNav();
	});
});