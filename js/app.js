$(document).ready(function(){

	// Functuion for Scroll Up(to top of the page) effect
	$('.scrollTop').click(function(){
		event.preventDefault();
		$(window).scrollTop(2500,100);
		$('html, body').animate({
			scrollTop: 0
			}, 1600, 'swing');
		});

});
