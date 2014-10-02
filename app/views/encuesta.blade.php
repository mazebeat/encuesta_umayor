@extends('layouts.user')

@section('style')
<style type="text/css">
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
		@if ($errors->has())
			@if($errors->any())
				{{ HTML::alert('danger', $errors->all(), null) }}
			@endif
		@endif
		<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			{{ Form::open(array('route' => 'encuestas.store', 'method' => 'POST', 'accept-charset' => 'UTF-8', 'role' => 'form', 'id' => 'survey_form')) }}
			{{-- Pregunta 1 --}}
			<article class="question">
				<h4>1- Con nota de 1 a 7, donde 1 es muy malo y 7 es muy bueno, ¿Hasta qué punto la marca Universidad Mayor ha logrado satisfacer sus necesidades en forma efectiva?</h4>
				<div class="table-responsive hidden-md hidden-lg">
					<table class="table table-hover table-condensed">
						<thead class="text-center">
							<tr>
								<td></td>
								<td></td>
							</tr>
						</thead>
						<tbody class="form-group text-center">
							<tr>
								<td class="text-left vertical-align"><label class="control-label">Calificación</label></td>
								<td class="">{{ Form::selectRange2('pregunta_1[value]', '1', '7', null, array('class' => 'form-control', 'data-placeholder' => 'Selecciona una opción', 'data-question' => 1)) }}</td>
							</tr>
						</tbody>
					</table>
				</div>
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
						<tbody class="form-group text-center">
							<tr>
								<td class="text-left vertical-align"><label class="control-label">Calificación</label></td>
								<td><input type="radio" name="pregunta_1[value]" value="1"></td>
								<td><input type="radio" name="pregunta_1[value]" value="2"></td>
								<td><input type="radio" name="pregunta_1[value]" value="3"></td>
								<td><input type="radio" name="pregunta_1[value]" value="4"></td>
								<td><input type="radio" name="pregunta_1[value]" value="5"></td>
								<td><input type="radio" name="pregunta_1[value]" value="6"></td>
								<td><input type="radio" name="pregunta_1[value]" value="7"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<h5>¿Por qué evalúa con esa nota?</h5>
				<div class="form-group"> 
					{{ Form::textarea('pregunta_1[text]', null, array('placeholder' => 'Porque...', 'class' => 'form-control', 'rows' => '3', 'data-question-text' => 1,  'maxlength' => '255')) }}
				</div>
			</article>
			<hr>
			{{-- Pregunta 2 --}}
			<article class="question">
				<h4>2- Con nota de 1 a 7, donde 1 es muy malo y 7 es muy bueno, ¿Qué tan simple y fácil le ha sido interactuar con Universidad Mayor?</h4>
				<div class="table-responsive hidden-md hidden-lg">
					<table class="table table-hover table-condensed">
						<thead class="text-center">
							<tr>
								<td></td>
								<td></td>
							</tr>
						</thead>
						<tbody class="form-group text-center">
							<tr>
								<td class="text-left vertical-align"><label class="control-label">Calificación</label></td>
								<td class="">{{ Form::selectRange2('pregunta_2[value]', '1', '7', null, array('class' => 'form-control', 'data-placeholder' => 'Selecciona una opción')) }}</td>
							</tr>
						</tbody>
					</table>
				</div>
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
						<tbody class="form-group text-center">
							<tr>
								<td class="text-left vertical-align"><label class="control-label">Calificación</label></td>
								<td><input type="radio" name="pregunta_2[value]" value="1"></td>
								<td><input type="radio" name="pregunta_2[value]" value="2"></td>
								<td><input type="radio" name="pregunta_2[value]" value="3"></td>
								<td><input type="radio" name="pregunta_2[value]" value="4"></td>
								<td><input type="radio" name="pregunta_2[value]" value="5"></td>
								<td><input type="radio" name="pregunta_2[value]" value="6"></td>
								<td><input type="radio" name="pregunta_2[value]" value="7"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<h5>¿Por qué evalúa con esa nota?</h5>
				<div class="form-group"> 
					{{ Form::textarea('pregunta_2[text]', null, array('placeholder' => 'Porque...', 'class' => 'form-control', 'rows' => '3', 'maxlength' => '255')) }}
				</div>
			</article>
			<hr>
			{{-- Pregunta 3 --}}
			<article class="question">
				<h4>3- Con nota de 1 a 7, donde 1 es muy malo y 7 es muy bueno, ¿Qué tan agradable ha sido su permanencia en la Universidad Mayor?</h4>
				<div class="table-responsive hidden-md hidden-lg">
					<table class="table table-hover table-condensed">
						<thead class="text-center">
							<tr>
								<td></td>
								<td></td>
							</tr>
						</thead>
						<tbody class="form-group text-center">
							<tr>
								<td class="text-left vertical-align"><label class="control-label">Calificación</label></td>
								<td class="">{{ Form::selectRange2('pregunta_3[value]', '1', '7', null, array('class' => 'form-control', 'data-placeholder' => 'Selecciona una opción', 'autocomplete' =>'off')) }}</td>
							</tr>
						</tbody>
					</table>
				</div>
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
						<tbody class="form-group text-center">
							<tr>
								<td class="text-left vertical-align"><label class="control-label">Calificación</label></td>
								<td><input type="radio" name="pregunta_3[value]" value="1"></td>
								<td><input type="radio" name="pregunta_3[value]" value="2"></td>
								<td><input type="radio" name="pregunta_3[value]" value="3"></td>
								<td><input type="radio" name="pregunta_3[value]" value="4"></td>
								<td><input type="radio" name="pregunta_3[value]" value="5"></td>
								<td><input type="radio" name="pregunta_3[value]" value="6"></td>
								<td><input type="radio" name="pregunta_3[value]" value="7"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<h5>¿Por qué evalúa con esa nota?</h5>
				<div class="form-group"> 
					{{ Form::textarea('pregunta_3[text]', null, array('placeholder' => 'Porque...', 'class' => 'form-control', 'rows' => '3', 'maxlength' => '255')) }}
				</div>
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
						<tbody class="form-group text-center">
							<tr>
								<td class="text-left vertical-align"><label class="control-label">Opción</label></td>
								<td><input type="radio" name="pregunta_4[value]" value="2" ></td>
								<td><input type="radio" name="pregunta_4[value]" value="1" ></td>
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
$(document).ready(function(){
   // Función a lanzar cada vez que se presiona una tecla en un textarea
   // en el que se encuentra el atributo maxlength
   $("textarea[maxlength]").keyup(function() {
       var limit   = $(this).attr("maxlength"); // Límite del textarea
       var value   = $(this).val();             // Valor actual del textarea
       var current = value.length;              // Número de caracteres actual
       if (limit < current) {                   // Más del límite de caracteres?
            // Establece el valor del textarea al límite
            $(this).val(value.substring(0, limit));
        }
    });
});
</script>
@stop