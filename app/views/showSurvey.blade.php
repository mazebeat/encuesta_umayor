@extends('layouts.user')

@section('style')
<style type="text/css">
	label {
		padding-left: 0;
		min-width: 100%;
	}
	label.hover {
		background-color: rgba(0, 0, 0, 0.1);
	}
	input[type=radio] {
		margin-right: 10px;
	}
	.question {
		margin-bottom: 30px;
	}
</style>
@stop

@section('content')
	<div class="col-md-12">
		{{ $msg or ''  }}
		{{ HTML::survey($survey, $questions) }}
	</div>
@stop

@section('script')
<script>
	$(document).ready(function(){
		$('input[type=radio]').iCheck({
			radioClass: 'iradio_square-yellow',
			increaseArea: '20%',
			labelHover: true,
			cursor: true
		});
	});
</script>
@stop