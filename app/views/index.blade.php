@extends('layouts.login')

@section('style')
<style type="text/css">
</style>
@stop

@section('content')
<div class="col-md-4 col-md-offset-4">
	<h1 class="text-center"></h1>
	@if ($errors->has())
		@if($errors->any())
			{{ HTML::alert('danger', $errors->all(), null) }}
		@endif
	@endif
	{{--<h1 class="text-center">{{ HTML::image('image/logo.png') }}</h1>--}}
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Ingresa tu RUT</h3>
		</div>
		<div class="panel-body">
			{{ Form::open(array('action' => 'HomeController@index', 'method' => 'POST', 'accept-charset' => 'UTF-8', 'role' => 'form', 'id' => 'login_form')) }}
				<fieldset>
					<div class="form-group">
						<input class="form-control" placeholder="Ingresar RUT sin puntos ni guión" name="rut" id="rut_field" type="text" data-maxlength="9" autocomplete="off" required>
					</div>
					<input class="btn btn-lg btn-hot btn-block text-uppercase" type="submit" value="Entrar">
				</fieldset>
			{{ Form::close()  }}
		</div>
	</div>
</div>
@stop

@section('script')
<script type="text/javascript">
document.getElementById('rut_field').value= '';
</script>
@stop