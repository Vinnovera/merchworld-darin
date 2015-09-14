$(document).ready(function() {
	console.log("hello");
	var stickyNavTop = $('.sticky-menu').offset().top;
 
	var stickyNav = function(){
	var scrollTop = $(window).scrollTop();
      
	if (scrollTop > stickyNavTop) { 
    	$('.sticky-menu').addClass('sticky');
	} else {
    	$('.sticky-menu').removeClass('sticky'); 
	}
};
 
	stickyNav();
 
$(window).scroll(function() {
    stickyNav();
	});
});