$(document).ready(function() {
	$(window).scroll(function() {
		if ($(this).scrollTop() > 350) {
			$('#go-top').fadeIn(350);
		} else {
			$('#go-top').fadeOut(350);
		}
	});

	$('#go-top').click(function(event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: 0
		}, 800);
	})

	$('#go-top').tooltip('show');
});