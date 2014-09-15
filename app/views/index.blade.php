
@extends('layouts.user')

@section('style')
<style>
	body{padding-top:20px;}
</style>
@stop

@section('content')
<div class="col-md-4 col-md-offset-4">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<h3 class="panel-title">Ingresa tu RUT</h3>
		</div>
		<div class="panel-body">
			{{ Form::open(array('action' => 'HomeController@index', 'accept-charset' => 'UTF-8', 'role' => 'form')) }}
				<fieldset>
					<div class="form-group">
						<input class="form-control" placeholder="Rut" name="rut" type="text" value="">
					</div>
					<input class="btn btn-lg btn-danger btn-block" type="submit" value="Login">
				</fieldset>
			{{ Form::close()  }}
		</div>
	</div>
</div>
@stop