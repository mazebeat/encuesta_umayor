@extends('layouts.user')

@section('content')
{{--{{ HTML::survey($survey, $questions) }}--}}
<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-left">
	<h3><strong>{{ Session::get('user_name', '')  }}</strong>, en nuestro afán de mejorar la experiencia de servicio de la Universidad Mayor, queremos invitarte a contestar este breve cuestionario para conocer la satisfacción con la Universidad.</h3>
	<h4>Luego de completar la encuesta, presiona "Enviar"</h4>
</div>
<div class="panel panel-primary col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
	<div class="panel-body">
		<div class="errors">
		@if ($errors->has())
			@if($errors->any())
				{{ HTML::alert('danger', $errors->all(), null) }}
			@endif
		@endif
		</div>
		<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			{{ Form::open(array('route' => 'encuestas.store', 'method' => 'POST', 'accept-charset' => 'UTF-8', 'role' => 'form', 'id' => 'survey_form', 'data-bv-onerror' => 'onFormError', 'data-bv-onsuccess' => 'onFormSuccess')) }}
			{{-- Pregunta 1 --}}
			<article class="question">
				<h4>1- Con nota de 1 a 7, donde 1 es muy malo y 7 es muy bueno, ¿En qué medida la Universidad Mayor ha logrado satisfacer tus necesidades en forma efectiva?</h4>
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
								<td class="">{{ Form::selectRange2('pregunta_1[value]', '1', '7', null, array('class' => 'form-control', 'data-placeholder' => 'Selecciona una opción')) }}</td>
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
				<div id="error_p1"></div>
				<h5>¿Por qué evalúas con esa nota?</h5>
				<div class="form-group"> 
					{{ Form::textarea('pregunta_1[text]', null, array('placeholder' => 'Porque...', 'class' => 'form-control', 'rows' => '3','length' => '300')) }}
					<small id="count"></small>
				</div>
			</article>
			<hr>
			{{-- Pregunta 2 --}}
			<article class="question">
				<h4>2- Con nota de 1 a 7, donde 1 es muy malo y 7 es muy bueno, ¿Qué tan simple y fácil te ha sido interactuar con los canales corporativos de comunicación de la Universidad Mayor?</h4>
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
				<div id="error_p2"></div>
				<h5>¿Por qué evalúas con esa nota?</h5>
				<div class="form-group"> 
					{{ Form::textarea('pregunta_2[text]', null, array('placeholder' => 'Porque...', 'class' => 'form-control', 'rows' => '3', 'length' => '300')) }}
					<small id="count"></small>
				</div>
			</article>
			<hr>
			{{-- Pregunta 3 --}}
			<article class="question">
				<h4>3- Con nota de 1 a 7, donde 1 es muy malo y 7 es muy bueno, ¿Qué tan agradable ha sido tu permanencia en la Universidad Mayor?</h4>
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
				<div id="error_p3"></div>
				<h5>¿Por qué evalúas con esa nota?</h5>
				<div class="form-group"> 
					{{ Form::textarea('pregunta_3[text]', null, array('placeholder' => 'Porque...', 'class' => 'form-control', 'rows' => '3')) }}
					<small id="count"></small>
				</div>
			</article>
			<hr>
			{{-- Pregunta 4 --}}
			<article class="question">
				<h4>4- ¿Recomendarías la Universidad Mayor a tus conocidos o amigos?</h4>
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
				<div id="error_p4"></div>
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
	var $username = '{{{ Session::get('user_name')  }}}';
</script>
@stop