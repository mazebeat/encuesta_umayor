@extends('layouts.user')

@section('style')
<style type="text/css">
</style>
@stop

@section('content')
{{ Form::radio('demo', 1)  }}
{{ Form::radio('demo', 2)  }}
{{ Form::radio('demo', 3)  }}
{{ Form::select('demo', array(1,2,3))  }}
@stop

@section('script')
<script>
	var $name;
	var $value;
	$('input[type=radio]').change(function() {
		$name = $(this).attr('name');
		 $value = parseInt($(this).val());
        console.log($value);
        $('select[name=' + $name +  '] option:contains(' + $value + ')').prop('selected', true);
	});

	$('select').on("change", function () {
        $name = $(this).attr('name');
        $value = parseInt($(this).val());
        console.log($value++);
        $('input[type=radio][name=' + $name + '][value=' + $value++ + ']').prop("checked", true);
    });
</script>
@stop