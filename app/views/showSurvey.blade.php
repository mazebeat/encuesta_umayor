@extends('layouts.user')

@section('style')
<style>
	label {
		padding-left: 0;
		min-width: 80%;
	}
	input[type=radio] {
		margin-right: 10px;
	}
</style>
@stop

@section('content')


	{{ HTML::survey($questions, 'FIRST SURVEY') }}
@stop

@section('script')
<script>
	$(document).ready(function(){
		$('input[type=radio]').iCheck({
			radioClass: 'iradio_square-yellow',
			increaseArea: '20%',
			labelHover: false,
			cursor: true
		});
	});
</script>
@stop