@extends('layouts.message')

@section('style')
<style type="text/css">
.code_error {
font-size: 8wv;
}
</style>
@stop

@section('content')
<div class="col-md-4 col-md-offset-4">
	@if ($errors->has())
		@if($errors->any())
			{{ HTML::alert('danger', $errors->all(), null) }}
		@endif
	@endif
	@if(isset($code))
	    <h3 class="text-center">Oops! Sentimos la molestia</h3>
	    <h1 class="text-center text-uppercase code_error">Error {{ $code or '' }}</h1>
	@endif
</div>
@stop

@section('script')
<script type="text/javascript">
</script>
@stop