// jQuery testing
$(".scroll-down-arrow").click(function(){
	$(".scroll-down-arrow").fadeOut(1500);
	$('html, body').animate({scrollTop: 400}, 1500);
	// scrollTop: $(window).scrollTop() + 100;
});