$(document).ready(function () {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 350) {
			$('#go-top').fadeIn(350);
		} else {
			$('#go-top').fadeOut(350);
		}
	});

	$('#go-top').click(function (event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: 0
		}, 800);
	}).tooltip('show');

	$('#btn_neg').click(function (event) {
		event.preventDefault();
		$('.politicas').remove();
		var div = $(this).parents('div.alert');
		div.find('h4').remove();
		div.find('p').remove();
		div.append('<p><i class="fa fa-check fa-fw"></i>Gracias por tu tiempo, ¡Tu opinión es muy importante!</p>');
		div.removeClass('alert-warning').addClass('alert-success');
		$.get("logout", function ($message) {
			if ($message == 'OK') {
				setTimeout('window.location.href=\"http://www.umayor.cl/\";', 5000);
			}
		});
	});

	$('#modal1_ok').click(function (event) {
		event.preventDefault();
		$("#modal1").modal('toggle');
		$.get("addexception", function (msg) {
			if (msg === 'OK') {
				setTimeout('window.location.href=\"http://www.umayor.cl/\";', 5000);
			}
		});
	});

	$('#login_form').bootstrapValidator({
		excluded: [':disabled', ':hidden', ':not(:visible)'],
		fields: {
			rut: {
				message: 'El RUT no es valido',
				validators: {
					notEmpty: {
						message: 'El campo RUT es requerido'
					},
					callback: {
						callback: function (value, validator) {
							return $.validateRut(value);
						},
						message: 'El campo RUT es incorrecto'
					},
					stringLength: {
						min: 8,
						max: 9,
						message: 'El campo RUT debe tener entre 8 y 9 caracteres'
					}
				}
			}
		}
	});
	//.on('success.form.bv', function (e) {
	//e.preventDefault();
	//var $form = $(e.target);
	//var $url = $form.attr('action');
	//var $data = $form.serialize();
	//var bv = $form.data('bootstrapValidator');
	//$.post($url, $data, function ($result) {
	//	if($result === 'OK') {
	//		location.href="/encuestas";
	//	}
	//	if($result === 'ERROR'){
	//		var $msg  = '<div class="alert alert-danger" role="alert">Usuario no registrado.</div>';
	//		$('.panel').parent().prepend($msg);
	//	}
	//	var $data = $result.data;
	//	var $options = $result.options;
	//	var $title = $data.title;
	//	var $subtitle = $data.subtitle;
	//	var $text = $data.text;
	//	var $type = $data.type;
	//	var $output = '<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">' +
	//		'<div role="alert" class="alert alert-' + $type + ' fade in">' +
	//		'<button data-dismiss="alert" class="close" type="button"><i class="fa fa-times"></i></button>';
	//	if (typeof $title != 'undefined' || $title.length != 0) {
	//		$output = $output + '<h4>' + $title + '</h4>';
	//	}
	//	if (typeof $subtitle != 'undefined' || $subtitle.length != 0) {
	//		$output = $output + '<h5>' + $subtitle + '</h5>';
	//	}
	//	if (typeof $text != 'undefined' || $text.length != 0) {
	//		$output = $output + '<p>' + $text + '</p>';
	//	}
	//	if (typeof $options != 'undefined' || $options.length != 0) {
	//		$output = $output + '<p>';
	//		$.each($options, function (index, value) {
	//			$output = $output + value;
	//		});
	//		$output = $output + '</p>';
	//	}
	//	$output = $output + '<p class="clearfix">';
	//	$output = $output + '</div></div>';
	//	$('#login_umayor').children().remove();
	//	$('#login_umayor').parent().append($output);
	//}, 'json');
	//});

	$('#survey_form')
		.bootstrapValidator({
			excluded: [':disabled', ':hidden', ':not(:visible)'],
			fields: {
				'pregunta_1[value]': {
					container: '#error_p1',
					validators: {
						notEmpty: {
							message: 'Campo requerido '
						},
						choice: {
							min: 1,
							message: 'Debe seleccionar al menos una opción'
						}
					}
				},
				'pregunta_2[value]': {
					container: '#error_p2',
					validators: {
						notEmpty: {
							message: 'Campo requerido '
						},
						choice: {
							min: 1,
							message: 'Debe seleccionar al menos una opción'
						}
					}
				},
				'pregunta_3[value]': {
					container: '#error_p3',
					validators: {
						notEmpty: {
							message: 'Campo requerido '
						},
						choice: {
							min: 1,
							message: 'Debe seleccionar al menos una opción'
						}
					}
				},
				'pregunta_4[value]': {
					container: '#error_p4',
					validators: {
						notEmpty: {
							message: 'Campo requerido '
						},
						choice: {
							min: 1,
							message: 'Debe seleccionar al menos una opción'
						}
					}
				},
				'pregunta_1[text]': {
					validators: {
						notEmpty: {
							message: 'Campo requerido'
						},
						stringLength: {
							max: 250,
							message: 'Debe tener un máximo de 250 caracteres'
						}
					}
				},
				'pregunta_2[text]': {
					validators: {
						notEmpty: {
							message: 'Campo requerido'
						},
						stringLength: {
							max: 250,
							message: 'Debe tener un máximo de 250 caracteres'
						}
					}
				},
				'pregunta_3[text]': {
					validators: {
						notEmpty: {
							message: 'Campo requerido'
						},
						stringLength: {
							max: 250,
							message: 'Debe tener un máximo de 250 caracteres'
						}
					}
				}
			}
		});
});

function onFormError(event) {
	event.preventDefault();
	$('html, body').animate({
		scrollTop: $(".errors").offset().top
	}, 1000);
	var $msg = '<div class="errors alert alert-danger">' + $username + ', necesitamos respuesta a todas tus preguntas</div>';
	$('.errors').append($msg);
}

function onFormSuccess(event) {
	$('.errors').empty();
}

$("textarea").keyup(function () {
	$(this).parent().find('small#count').text('Caracteres: ' + $(this).val().length);
});

$('.table td')
	.hover(
	function () {
		$(this).find('.iradio_square-red').addClass('hover');
	}, function () {
		$(this).find('.iradio_square-red').removeClass("hover");
	}
).click(function (event) {
		event.preventDefault();
		$(this).find('.iradio_square-red').iCheck('toggle');
	});

$('input[type=radio]')
	.iCheck({
		radioClass: 'iradio_square-red',
		increaseArea: '20%',
		labelHover: true,
		cursor: true
	})
	.on('ifChecked', function (event) {
		event.preventDefault();
		var $name = $(this).attr('name');
		var $value = $(this).val();
		$('select[name="' + $name + '"]').select2('val', $value);
		$('#survey_form').bootstrapValidator('revalidateField', $name);
	});

$('select')
	.select2({
		width: '100%',
		containerCssClass: '',
		dropdownAutoWidth: true,
		dropdownCssClass: 'text-center'
	})
	.change(function (event) {
		event.preventDefault();
		var $name = $(this).attr('name');
		var $value = event.val;
		$('input[type=radio][name="' + $name + '"][value=' + $value++ + ']').iCheck('toggle');
		$('#survey_form').bootstrapValidator('revalidateField', $name);
	});
