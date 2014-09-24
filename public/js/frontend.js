$(document).ready(function() {
	$(window).scroll(function() {
		if ($(this).scrollTop() > 250) {
			$('#go-top').fadeIn(250);
		} else {
			$('#go-top').fadeOut(250);
		}
	});

	$('#go-top').click(function(event) {
		event.preventDefault();
		$('html, body').animate({scrollTop: 0}, 300);
	});

	$('#go-top').tooltip('show');
});
