
//Portfolio image hover
$(".img-portfolio").hover(function() {
	$(this).closest('.portfolio-item').children('div').toggleClass('hover-active');
	$('.hover-active').hide().fadeIn();
});