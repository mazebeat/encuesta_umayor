@extends('layouts.login')

@section('style')
<style type="text/css">
</style>
@stop

@section('content')
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		{{ $msg or '' }}
	</div>
  <div class="clearfix"></div>
</div>
@stop

@section('script')
<script>
</script>
@stop