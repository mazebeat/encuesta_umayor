@extends('layouts.user')

@section('style')
<style type="text/css">
	label {
		padding-left: 0;
		min-width: 100%;
	}
	label.hover {
		background-color: rgba(0, 0, 0, 0.1);
	}
	input[type=radio] {
		margin-right: 10px;
	}
	.table .vertical-align {
		vertical-align: middle;
		line-height: 16px;
	}
	.table > tbody > tr > td, .table-responsive {
		border-top: 0;
		border: 0;
	}
</style>
@stop

@section('content')
{{--{{ HTML::survey($survey, $questions) }}--}}
<div class="col-xs-12 col-xm-12 col-md-12 col-lg-12 text-center">
	<h3><strong>{{ Session::get('user_name', '')  }}</strong>, en nuestro afán de mejorar la calidad de servicio de la Universidad Mayor, queremos invitarte a contestar este breve cuestionario para conocer la satisfacción con la Universidad.</h3>
	<h4>Luego de completar la encuesta, presiona "Enviar"</h4>
</div>
<div class="panel panel-primary col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
	<div class="panel-body">
		<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			{{ Form::open() }}
			{{-- Pregunta 1 --}}
			<article class="question">
				<h4>1- Con nota de 1 a 7, donde 1 es muy malo y 7 es muy bueno, ¿Hasta qué punto la marca Universidad Mayor ha logrado satisfacer sus necesidades en forma efectiva?</h4>
				<div class="table-responsive hidden-xs hidden-sm">
					<table class="table table-hover table-condensed">
						<thead class="text-center">
							<tr>
								<td></td>
								<td>1</td>
								<td>2</td>
								<td>3</td>
								<td>4</td>
								<td>5</td>
								<td>6</td>
								<td>7</td>
							</tr>
						</thead>
						<tbody class="text-center">
							<tr>
								<td class="text-left vertical-align">Calificación</td>
								<td><input type="radio" name="pregunta_1[value]" value="1" required></td>
								<td><input type="radio" name="pregunta_1[value]" value="2" required></td>
								<td><input type="radio" name="pregunta_1[value]" value="3" required></td>
								<td><input type="radio" name="pregunta_1[value]" value="4" required></td>
								<td><input type="radio" name="pregunta_1[value]" value="5" required></td>
								<td><input type="radio" name="pregunta_1[value]" value="6" required></td>
								<td><input type="radio" name="pregunta_1[value]" value="7" required></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="table-responsive hidden-md hidden-lg">
					<table class="table table-hover table-condensed">
						<thead class="text-center">
							<tr>
								<td></td>
								<td></td>
							</tr>
						</thead>
						<tbody class="text-center">
							<tr>
								<td class="text-left vertical-align">Calificación</td>
								<td class="">{{ Form::selectRange2('pregunta_1[value]', '1', '7', null, array('class' => 'form-control', 'data-placeholder' => 'Selecciona una opción', 'data-question' => 1, 'required')) }}</td>
							</tr>
						</tbody>
					</table>
				</div>
				<h5>¿Por qué evalúa con esa nota?</h5>
                {{ Form::textarea('pregunta_1[text]', null, array('placeholder' => 'Porque...', 'class' => 'form-control', 'rows' => '3', 'data-question-text' => 1)) }}
			</article>
			<hr>
			{{-- Pregunta 2 --}}
			<article class="question">
				<h4>2- Con nota de 1 a 7, donde 1 es muy malo y 7 es muy bueno, ¿Qué tan simple y fácil le ha sido interactuar con Universidad Mayor?</h4>
				<div class="table-responsive hidden-xs hidden-sm">
					<table class="table table-hover table-condensed">
						<thead class="text-center">
							<tr>
								<td></td>
								<td>1</td>
								<td>2</td>
								<td>3</td>
								<td>4</td>
								<td>5</td>
								<td>6</td>
								<td>7</td>
							</tr>
						</thead>
						<tbody class="text-center">
							<tr>
								<td class="text-left vertical-align">Calificación</td>
								<td><input type="radio" name="pregunta_2[value]" value="1" required></td>
								<td><input type="radio" name="pregunta_2[value]" value="2" required></td>
								<td><input type="radio" name="pregunta_2[value]" value="3" required></td>
								<td><input type="radio" name="pregunta_2[value]" value="4" required></td>
								<td><input type="radio" name="pregunta_2[value]" value="5" required></td>
								<td><input type="radio" name="pregunta_2[value]" value="6" required></td>
								<td><input type="radio" name="pregunta_2[value]" value="7" required></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="table-responsive hidden-md hidden-lg">
					<table class="table table-hover table-condensed">
						<thead class="text-center">
							<tr>
								<td></td>
								<td></td>
							</tr>
						</thead>
						<tbody class="text-center">
							<tr>
								<td class="text-left vertical-align">Calificación</td>
								<td class="">{{ Form::selectRange2('pregunta_2[value]', '1', '7', null, array('class' => 'form-control', 'data-placeholder' => 'Selecciona una opción', 'required')) }}</td>
							</tr>
						</tbody>
					</table>
				</div>
				<h5>¿Por qué evalúa con esa nota?</h5>
				{{ Form::textarea('pregunta_2[text]', null, array('placeholder' => 'Porque...', 'class' => 'form-control', 'rows' => '3')) }}
			</article>
			<hr>
			{{-- Pregunta 3 --}}
			<article class="question">
				<h4>3- Con nota de 1 a 7, donde 1 es muy malo y 7 es muy bueno, ¿Qué tan agradable ha sido su permanencia en la Universidad Mayor?</h4>
				<div class="table-responsive hidden-xs hidden-sm">
					<table class="table table-hover table-condensed">
						<thead class="text-center">
							<tr>
								<td></td>
								<td>1</td>
								<td>2</td>
								<td>3</td>
								<td>4</td>
								<td>5</td>
								<td>6</td>
								<td>7</td>
							</tr>
						</thead>
						<tbody class="text-center">
							<tr>
								<td class="text-left vertical-align">Calificación</td>
								<td><input type="radio" name="pregunta_3[value]" value="1" required></td>
								<td><input type="radio" name="pregunta_3[value]" value="2" required></td>
								<td><input type="radio" name="pregunta_3[value]" value="3" required></td>
								<td><input type="radio" name="pregunta_3[value]" value="4" required></td>
								<td><input type="radio" name="pregunta_3[value]" value="5" required></td>
								<td><input type="radio" name="pregunta_3[value]" value="6" required></td>
								<td><input type="radio" name="pregunta_3[value]" value="7" required></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="table-responsive hidden-md hidden-lg">
					<table class="table table-hover table-condensed">
						<thead class="text-center">
							<tr>
								<td></td>
								<td></td>
							</tr>
						</thead>
						<tbody class="text-center">
							<tr>
								<td class="text-left vertical-align">Calificación</td>
								<td class="">{{ Form::selectRange2('pregunta_3[value]', '1', '7', null, array('class' => 'form-control', 'data-placeholder' => 'Selecciona una opción', 'required')) }}</td>
							</tr>
						</tbody>
					</table>
				</div>
				<h5>¿Por qué evalúa con esa nota?</h5>
				{{ Form::textarea('pregunta_3[text]', null, array('placeholder' => 'Porque...', 'class' => 'form-control', 'rows' => '3')) }}
			</article>
			<hr>
			{{-- Pregunta 4 --}}
			<article class="question">
				<h4>4- ¿Recomendaría Universidad Mayor a sus conocidos o amigos?</h4>
				<div class="table-responsive">
					<table class="table table-hover table-condensed">
						<thead class="text-center">
							<tr>
								<td></td>
								<td>Sí</td>
								<td>No</td>
							</tr>
						</thead>
						<tbody class="text-center">
							<tr>
								<td class="text-left vertical-align">Opción</td>
								<td><input type="radio" name="pregunta_4[value]" value="1" required></td>
								<td><input type="radio" name="pregunta_4[value]" value="0" required></td>
							</tr>
						</tbody>
					</table>
				</div>
			</article>
			<br/>
			{{ HTML::link('/logout', 'Salir', array('class' => 'col-xs-4 col-sm-4 col-md-3 col-lg-3 text-uppercase btn btn-default btn-lg')) }}
			{{ Form::submit('Enviar', array('class' => 'col-xs-4 col-sm-4 col-md-3 col-lg-3 text-uppercase btn btn-hot btn-lg pull-right'))  }}
			{{ Form::close() }}
		</section>
	</div>
</div>
@stop

@section('script')
<script type="text/javascript">
	var $name;
	var $value;

	$('.table td')
	.hover(
		function() {
			$(this).find('.iradio_square-red').addClass('hover');
		}, function() {
			$(this).find('.iradio_square-red').removeClass( "hover" );
		}
	).click(function(event) {
		event.preventDefault();
		$(this).find('.iradio_square-red').iCheck('toggle');
		event.stopPropagation();
	});

	$('input[type=radio]')
	.iCheck({
		radioClass: 'iradio_square-red',
		increaseArea: '20%',
		labelHover: true,
		cursor: true
	})
	.on('ifChecked', function (event){
		event.preventDefault();
		$name = $(this).attr('name');
		$value = $(this).val();
		console.log($name);
		console.log($value);
				$('select[name="' + $name +  '"]').select2('val', $value);
		event.stopPropagation();
	});

	$('select')
	.select2({
		width: '100%',
		containerCssClass: '',
		dropdownAutoWidth  : true,
		dropdownCssClass: 'text-center'
	})
	.change(function (event) {
		event.preventDefault();
		$name = $(this).attr('name');
		$value = event.val;
		$('input[type=radio][name="' + $name + '"][value=' + $value++ + ']').iCheck('toggle');
		event.stopPropagation();
	});
	</script>
	@stop