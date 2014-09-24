@extends('layouts.message')

@section('style')
<style type="text/css">
</style>
@stop

@section('content')
@if(isset($msg))
{{ HTML::create_alert(array_get($msg, 'data', ''), array_get($msg, 'options', '')) }}
@endif
@stop

@section('script')
<script>
</script>
@stop