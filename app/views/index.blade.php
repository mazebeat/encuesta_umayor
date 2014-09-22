@extends('layouts.login')

@section('style')
<style type="text/css">
</style>
@stop

@section('content')
<div class="col-md-4 col-md-offset-4">
	<h1 class="text-center"></h1>
	{{--<h1 class="text-center">{{ HTML::image('image/logo.png') }}</h1>--}}
	<div class="panel panel-warning">
		<div class="panel-heading">
			<h3 class="panel-title">Ingresa tu RUT</h3>
		</div>
		<div class="panel-body">
			{{ Form::open(array('action' => 'HomeController@index', 'accept-charset' => 'UTF-8', 'role' => 'form')) }}
				<fieldset>
					<div class="form-group">
						<input class="form-control" placeholder="RUT" name="rut" type="text" value="">
					</div>
					<input class="btn btn-lg btn-hot btn-block text-uppercase" type="submit" value="Entrar">
				</fieldset>
			{{ Form::close()  }}
		</div>
	</div>
</div>
@stop

@section('script')
@stop