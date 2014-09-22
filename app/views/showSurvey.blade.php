@extends('layouts.user')

@section('style')
{{-- iCheck.JS style --}}
{{ HTML::style('css/skins/all.css') }}
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
	<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		{{ $msg or ''  }}
		{{ HTML::survey($survey, $questions) }}
	</section>
@stop

@section('script')
{{-- iCheck.JS Plugin --}}
{{ HTML::script('js/icheck.js') }}
<script>
$('input[type=radio]').iCheck({
			radioClass: 'iradio_square-yellow',
			increaseArea: '20%',
			labelHover: true,
			cursor: true
		});
</script>
@stop