@extends('layouts.user')

@section('style')
<style type="text/css">
hr.message-inner-separator {
    clear: both;
    margin-top: 10px;
    margin-bottom: 13px;
    border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
    background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
</style>
@stop

@section('content')
<div class="col-sm-6 col-md-8 col-lg-offset-2">
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<span class="glyphicon glyphicon-ok"></span> <strong>Felicitaciones</strong>
		<hr class="message-inner-separator">
		<p>Gracias por tu tiempo y disponibilidad en responder. ¡Tu opinión es muy importante!</p>
	</div>
</div>
@stop

@section('script')
<script>
</script>
@stop