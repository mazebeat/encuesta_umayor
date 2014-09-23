@extends('layouts.user')

@section('style')
{{-- iCheck.JS style --}}
{{ HTML::style('css/skins/all.css') }}
{{ HTML::style('css/select2.css') }}
{{ HTML::style('css/select2-bootstrap.css') }}
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
<h1>{{ $msg or ''  }}</h1>
{{--{{ HTML::survey($survey, $questions) }}--}}
<div class="col-xs-12 col-xm-12 col-md-12 col-lg-12 text-center">
	<h3><strong>Nombre Alumno</strong>, en nuestro afán de mejorar la calidad de servicio de la Universidad Mayor, queremos invitarte a contestar este breve cuestionario para conocer la satisfacción con la Universidad.</h3>
	<h4>Luego de completar la encuesta, presiona "Enviar"</h4>
</div>
<div class="panel panel-primary col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
	<div class="panel-body">
		<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			{{ Form::open() }}
			{{-- Pregunta 1.1 --}}
			<article class="question">
				<h4>1.1- De los siguientes factores, ¿cuál te hace disfrutar más de la Universidad?</h4>
				<p>Frente a cada factor, indica con escala de 1 a 5, dónde 5 es disfruto mucho y 1 no disfruto</p>
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
							</tr>
						</thead>
						<tbody class="text-center">
							<tr>
								<td class="text-left vertical-align">Sistema Aprendizaje</td>
								<td><input type="radio" name="pregunta_1_1_1" value="1" ></td>
								<td><input type="radio" name="pregunta_1_1_1" value="2" ></td>
								<td><input type="radio" name="pregunta_1_1_1" value="3" ></td>
								<td><input type="radio" name="pregunta_1_1_1" value="4" ></td>
								<td><input type="radio" name="pregunta_1_1_1" value="5" ></td>
							</tr>
							<tr>
								<td class="text-left vertical-align">Profesores</td>
								<td><input type="radio" name="pregunta_1_1_2" value="1" ></td>
								<td><input type="radio" name="pregunta_1_1_2" value="2" ></td>
								<td><input type="radio" name="pregunta_1_1_2" value="3" ></td>
								<td><input type="radio" name="pregunta_1_1_2" value="4" ></td>
								<td><input type="radio" name="pregunta_1_1_2" value="5" ></td>
							</tr>
							<tr>
								<td class="text-left vertical-align">Infraestructura</td>
								<td><input type="radio" name="pregunta_1_1_3" value="1" ></td>
								<td><input type="radio" name="pregunta_1_1_3" value="2" ></td>
								<td><input type="radio" name="pregunta_1_1_3" value="3" ></td>
								<td><input type="radio" name="pregunta_1_1_3" value="4" ></td>
								<td><input type="radio" name="pregunta_1_1_3" value="5" ></td>
							</tr>
							<tr>
								<td class="text-left vertical-align">Material de apoyo</td>
								<td><input type="radio" name="pregunta_1_1_4" value="1" ></td>
								<td><input type="radio" name="pregunta_1_1_4" value="2" ></td>
								<td><input type="radio" name="pregunta_1_1_4" value="3" ></td>
								<td><input type="radio" name="pregunta_1_1_4" value="4" ></td>
								<td><input type="radio" name="pregunta_1_1_4" value="5" ></td>
							</tr>
							<tr>
								<td class="text-left vertical-align">Espacios recreativos</td>
								<td><input type="radio" name="pregunta_1_1_5" value="1" ></td>
								<td><input type="radio" name="pregunta_1_1_5" value="2" ></td>
								<td><input type="radio" name="pregunta_1_1_5" value="3" ></td>
								<td><input type="radio" name="pregunta_1_1_5" value="4" ></td>
								<td><input type="radio" name="pregunta_1_1_5" value="5" ></td>
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
								<td class="text-left vertical-align">Sistema Aprendizaje</td>
								<td class="">{{ Form::selectRange('pregunta_1_1_1', 1, 5, null, array('class' => 'form-control', 'data-placeholder' => 'Select a state')) }}</td>
							</tr>
							<tr>
								<td class="text-left vertical-align">Profesores</td>
								<td class="">{{ Form::selectRange('pregunta_1_1_2', 1, 5, null, array('class' => 'form-control', 'data-placeholder' => 'Select a state')) }}</td>
							</tr>
							<tr>
								<td class="text-left vertical-align">Infraestructura</td>
								<td class="">{{ Form::selectRange('pregunta_1_1_3', 1, 5, null, array('class' => 'form-control', 'data-placeholder' => 'Select a state')) }}</td>
							</tr>
							<tr>
								<td class="text-left vertical-align">Material de apoyo</td>
								<td class="">{{ Form::selectRange('pregunta_1_1_4', 1, 5, null, array('class' => 'form-control', 'data-placeholder' => 'Select a state')) }}</td>
							</tr>
							<tr>
								<td class="text-left vertical-align">Espacios recreativos</td>
								<td class="">{{ Form::selectRange('pregunta_1_1_5', 1, 5, null, array('class' => 'form-control', 'data-placeholder' => 'Select a state')) }}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</article>
			<hr>
			{{-- Pregunta 1.2 --}}
			<article class="question">
				<h4>1.2- De acuerdo a los factores señalados anteriormente, Con nota de 1 a 7, donde 1 es muy malo y 7 es muy bueno, ¿Satisfac4 Universidad Mayor sus necesidades en forma efectiva?</h4>
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
								<td><input type="radio" name="pregunta_1-2" value="1" ></td>
								<td><input type="radio" name="pregunta_1-2" value="2" ></td>
								<td><input type="radio" name="pregunta_1-2" value="3" ></td>
								<td><input type="radio" name="pregunta_1-2" value="4" ></td>
								<td><input type="radio" name="pregunta_1-2" value="5" ></td>
								<td><input type="radio" name="pregunta_1-2" value="6" ></td>
								<td><input type="radio" name="pregunta_1-2" value="7" ></td>
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
								<td class="">{{ Form::selectRange('pregunta_1-2', 1, 7, null, array('class' => 'form-control', 'data-placeholder' => 'Select a state')) }}</td>
							</tr>
						</tbody>
					</table>
				</div>
				<h5>¿Por qué evalúa con esa nota?</h5>
				{{ Form::textarea('pregunta_1-2_text', null, array('placeholder' => 'Porque...', 'class' => 'form-control', 'rows' => '3')) }}
			</article>
			<hr>
			{{-- Pregunta 2 --}}
			<article class="question">
				<h4>2- Con nota de 1 a 7, donde 1 es muy malo y 7 es muy bueno, ¿Le ha sido fácil acceder a los sistemas de comunicación o servicios d4 Universidad Mayor?</h4>
				<p>Entendiendo los sistemas de comunicación como el área de servicio al cliente, coordinación académica, área administrativa, (revisar y complementar)</p>
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
								<td><input type="radio" name="pregunta_2" value="1" ></td>
								<td><input type="radio" name="pregunta_2" value="2" ></td>
								<td><input type="radio" name="pregunta_2" value="3" ></td>
								<td><input type="radio" name="pregunta_2" value="4" ></td>
								<td><input type="radio" name="pregunta_2" value="5" ></td>
								<td><input type="radio" name="pregunta_2" value="6" ></td>
								<td><input type="radio" name="pregunta_2" value="7" ></td>
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
								<td class="">{{ Form::selectRange('pregunta_2', 1, 7, null, array('class' => 'form-control', 'data-placeholder' => 'Select a state')) }}</td>
							</tr>
						</tbody>
					</table>
				</div>
				<h5>¿Por qué evalúa con esa nota?</h5>
				{{ Form::textarea('pregunta_2_text', null, array('placeholder' => 'Porque...', 'class' => 'form-control', 'rows' => '3')) }}
			</article>
			<hr>
			{{-- Pregunta 3 --}}
			<article class="question">
				<h4>3- Con nota de 1 a 7, donde 1 es muy malo y 7 es muy bueno, ¿Ha sido satisfactoria su permanencia en la Universidad Mayor?</h4>
				<p>Entendiendo los sistemas de comunicación como el área de servicio al cliente, coordinación académica, área administrativa, (revisar y complementar)</p>
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
								<td><input type="radio" name="pregunta_3" value="1" ></td>
								<td><input type="radio" name="pregunta_3" value="2" ></td>
								<td><input type="radio" name="pregunta_3" value="3" ></td>
								<td><input type="radio" name="pregunta_3" value="4" ></td>
								<td><input type="radio" name="pregunta_3" value="5" ></td>
								<td><input type="radio" name="pregunta_3" value="6" ></td>
								<td><input type="radio" name="pregunta_3" value="7" ></td>
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
								<td class="">{{ Form::selectRange ('pregunta_3', 1, 7, null, array('class' => 'form-control', 'data-placeholder' => 'Select a state')) }}</td>
							</tr>
						</tbody>
					</table>
				</div>
				<h5>¿Por qué evalúa con esa nota?</h5>
				{{ Form::textarea('pregunta_3_text', null, array('placeholder' => 'Porque...', 'class' => 'form-control', 'rows' => '3')) }}
			</article>
			<hr>
			{{-- Pregunta 4 --}}
			<article class="question">
				<h4>4- ¿Recomendaría Universidad Mayor a sus conocidos o amigos?</h4>
				<div class="table-responsive">
					<table class="table table-hover table-condensed">
						<thead class="text-center">
							<tr>
								{{--<td></td>--}}
								<td>Sí</td>
								<td>No</td>
							</tr>
						</thead>
						<tbody class="text-center">
							<tr>
								{{--<td class="text-left vertical-align">Calificación</span>>--}}
								<td><input type="radio" name="pregunta_4" value="0" ></td>
								<td><input type="radio" name="pregunta_4" value="1" ></td>
							</tr>
						</tbody>
					</table>
				</div>
			</article>
			<br/>
			{{ HTML::link('/logout', 'Salir', array('class' => 'col-md-3 text-uppercase btn btn-default btn-lg')) }}
			{{ Form::submit('Enviar', array('class' => 'col-md-3 text-uppercase btn btn-lg btn-hot pull-right'))  }}
			{{ Form::close() }}
		</section>
	</div>
</div>
@stop

@section('script')
{{-- iCheck.JS Plugin --}}
{{ HTML::script('js/icheck.min.js') }}
{{ HTML::script('js/select2.min.js') }}
{{ HTML::script('js/select2_locale_es.js') }}
<script type="text/javascript">
	var $name;
	var $value;

	$('input[type=radio]').iCheck({
		radioClass: 'iradio_square-red',
		increaseArea: '20%',
		labelHover: true,
		cursor: true
	})
	.on('ifChecked', function (event){
		event.preventDefault()
		$name = $(this).attr('name');
		$value = $(this).val();
		$('select[name=' + $name +  ']').select2('val', $value);
	});

	$('select').select2({
		width: '100%',
		containerCssClass: '',
		dropdownAutoWidth  : true,
		dropdownCssClass: 'text-center '
	})
	.on("change", function (event) {
		event.preventDefault()
		$name = $(this).attr('name');
		$value = event.val;
		$('input[type=radio][name=' + $name + '][value=' + $value++ + ']').iCheck('toggle');
	});
</script>
@stop