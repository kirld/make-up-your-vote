$(document).ready(function(){
	// function for Scrolling to top of the Page
	$('.scrollTop').click(function(){
		event.preventDefault();
		$(window).scrollTop(2500,100);
		$('html, body').animate({
			scrollTop: 0
			}, 1600, 'swing');
		});


});