$(document).ready(function(){
	// function for Scrolling to top of the Page
	$('.scrollTop').click(function(){
		event.preventDefault();
		$(window).scrollTop(2500,100);
		$('html, body').animate({
			scrollTop: 0
			}, 1600, 'swing');
	});

	// function for mobile menu click
	var mobClick = $('.mobile-tab');
	var mobMenu = $('.mobile-menu');
		mobMenu.hide(); // hidden on load
		mobClick.click(function(){
			// event.preventDefault();
			if(mobMenu.is(':hidden')){
				mobMenu.slideDown(450,"swing");
			}
			else{
				mobMenu.slideUp(450,"swing");
			}
		
	});
	// function for clicking outside to close mob menu
	$(document).mouseup(function(e){
		var menu = $('.mobile-menu');
		if(!menu.is(e.target)// when target is not the menu container)
		&& menu.has(e.target).length === 0) // and child element of the container
		{
			menu.slideUp(450, "swing");
		}
	});	


});