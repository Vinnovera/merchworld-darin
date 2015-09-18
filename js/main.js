$(document).ready(function() {
	
	// cache the element
	var $navBar = $('.menu');

	// find original navigation bar position
	var navPos = $navBar.offset().top;

	// on scroll
	$(window).scroll(function() {
		console.log('hello');

    	// get scroll position from top of the page
    	var scrollPos = $(this).scrollTop();

		// check if scroll position is >= the nav position
		if (scrollPos >= navPos) {
		    $navBar.addClass('fixed');
		} else {
		    $navBar.removeClass('fixed');
		}

	});

	//När man klickar på en vara ('li') gömmer man shoppen och visar en div med information om varan som man har klickat på
	$('.items-list li').on('click',function() {
		$('.items-list').hide();
		$('.item-show').show();
		loadContent();
	});

	//När man klickar på x töms 'item-show' och shoppen visas igen
	$('item-show').on('click',function() {
		$('.item-show').empty();
		$('.items-list').show();
		
	});	
 


	//Slide toggle mobile menu
	$('button').click(function() {
		$('.main-menu').slideToggle("fast");
	});
});
