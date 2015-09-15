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

	//När man klickar på en vara gömmer man listan och visar en div med information om varan som man har klickat på
	$('.items-list li').click(function() {
		$('.items-list').hide();
		$('.item-show').show();
		loadContent();
    	return false;
	});

	function loadContent(){
		$.ajax({
			url: "items/dd1.php"
		}).done(function(data){
			$(".item-show").html(data);
		});
	}
};
 
	stickyNav();
 
$(window).scroll(function() {
    stickyNav();
	});
});