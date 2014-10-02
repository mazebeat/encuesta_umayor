$(window).resize(function () {
	var radio = $('input[type=radio]');
	var select = $('select');

	if ($(window).width() < 975) {
		console.log('MOVIL');
	} else {
		console.log('DESKTOP');
	}
});

$(document).ready(function () {
	// BOTON VOLVER ARRIBA
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

	// BOTON NEGACION SEGUNDA VEZ ENCUESTA
	$('#btn_neg').click(function (event) {
		event.preventDefault();
		var div = $(this).parents('div.alert');
		div.find('h4').remove();
		div.find('p').remove();
		div.append('<p><i class="fa fa-check fa-fw"></i>Gracias por tu tiempo. ¡Tu opinión es muy importante!</p>');
		div.removeClass('alert-warning').addClass('alert-success');
		$.get("logout", function (msg) {
			if (msg == 'OK') {
				setTimeout("window.location.href='/';", 4000);
			}
		});
	});

	// VALIDACIONES FOMRULARIOS
	$('#login_form').bootstrapValidator({
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
			excluded: ':disabled',
			feedbackIcons: {
				required: 'glyphicon glyphicon-flash',
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				'pregunta_1[value]': {
					validators: {
						notEmpty: {
							message: ' '
						},
						choice: {
							min: 1,
							message: ' '
						},
						callback: function (value, validator) {
							console.log('P1 ' + value);
						}
					}
				},
				'pregunta_2[value]': {
					validators: {
						notEmpty: {
							message: ' '
						},
						choice: {
							min: 1,
							message: ' '
						},
						callback: function (value, validator) {
							console.log('P2 ' + value);
						}
					}
				},
				'pregunta_3[value]': {
					validators: {
						notEmpty: {
							message: ' '
						},
						choice: {
							min: 1,
							message: ' '
						},
						callback: function (value, validator) {
							console.log('P3 ' + value);
						}
					}
				},
				'pregunta_4[value]': {
					validators: {
						notEmpty: {
							message: ' '
						},
						choice: {
							min: 1,
							message: ' '
						}
					}
				}
			}
		});


	// FUNCIONES TABLA ENCUESTA
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
			event.stopPropagation();
		});
});

// CARGA ESTILO RADIO BUTTONS EN ENCUESTA Y MODIFICA SU VALOR SEGÚN SELECT(INPUT)
$('input[type=radio]')
	.iCheck({
		radioClass: 'iradio_square-red',
		increaseArea: '20%',
		labelHover: true,
		cursor: true
	})
	.on('ifChecked', function (event) {
		console.log('ifChecked');
		event.preventDefault();
		var $name = $(this).attr('name');
		var $value = $(this).val();
		$('select[name="' + $name + '"]').select2('val', $value);
		console.log('R '+$name);
		$('#survey_form').bootstrapValidator('revalidateField', $name);
	});

// CARGA ESTILO SELECT INPUT EN ENCUESTA Y MODIFICA SU VALOR SEGUN RADIO BUTTONS
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
		console.log('S '+$name);
		$('#survey_form').bootstrapValidator('revalidateField', $name);
	});
