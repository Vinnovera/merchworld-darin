$(document).ready(function() {
	
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

	//När man klickar på en vara ('li') gömmer man shoppen och visar en div med information om varan som man har klickat på
	$('.items-list li').click(function() {
		$('.items-list').hide();
		$('.item-show').show();
		loadContent();
	});

	//Laddar in innehållet med hjälp av ajax
	function loadContent(){
		$.ajax({
			url: "items/dd1.php"
		}).done(function(data){
			$(".item-show").html(data);
		});
	}

	//När man klickar på x töms 'item-show' och shoppen visas igen
	$('item-show .fa').click(function() {
		console.log('hej');
		$('.item-show').empty();
		$('.items-list').show();
	});	
 
	stickyNav();
 
	$(window).scroll(function() {
	    stickyNav();
	});
});
