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
		div.append('<p><i class="fa fa-check fa-fw"></i>Gracias por tu tiempo. ¡Tu opinión es muy importante!</p>');
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
		$.get("add_exception", function (msg) {
			if (msg == 'OK') {
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

function onFormSuccess(e) {
	console.log('enter');
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
