@extends('layouts.login')

@section('style')
<style type="text/css">
</style>
@stop

@section('content')
<div class="col-md-8 col-md-offset-2">
<h1></h1>
	<div role="alert" class="alert alert-warning fade in">
          <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <h4>Nombre Alumno</h4>
          <p>En el actual periodo, ya registramos tus respuestas con fecha <strong>dd-mm-aa</strong> a las <strong>hh:mm</strong>, ¿deseas actualizar esta información?</p>
          <p class="clearfix">
            {{ HTML::link('/', 'NO', array('class' => 'col-md-3 btn btn-default btn-lg text-uppercase')) }}
            {{ HTML::link('survey', 'SI', array('class' => 'col-md-3 btn btn-hot btn-lg text-uppercase pull-right')) }}
          </p>
    </div>
</div>
@stop

@section('script')
@stop