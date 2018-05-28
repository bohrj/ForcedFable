$(document).ready(function(){
	$(window).resize(function(){
		updateContainer();
	});
	
	$('.flexslider').flexslider();
});

function updateContainer() {
	if ($(window).width() > 400)
		$('ul.nav').css('display', 'block');
	else
		$('ul.nav').css('display', 'none');
}

function toggleMenu() {
	$('ul.nav').slideToggle();
}