@extends('layouts.user')

@section('style')
@parent
@stop

@section('content')
<div class="col-md-8 col-md-offset-2">
	<div role="alert" class="alert alert-warning fade in">
          <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <h4>Oh...! Atención</h4>
          <p>Estimado alumno, usted ya ha contestado la encuesta docente. Si desea, puede contestar una vez más las preguntas, de esta manera
          estará ayudando a mejorar nuestro sistema.</p>
          <p>
            {{ HTML::link('/', 'Salir', array('class' => 'btn btn-default btn-lg text-uppercase')) }}
            {{ HTML::link('survey', 'Contestar una vez más', array('class' => 'btn btn-sunny btn-lg text-uppercase pull-right')) }}
          </p>
    </div>
</div>
@stop

@section('script')
@stop