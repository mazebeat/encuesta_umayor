@extends('layouts.user')

@section('style')
<style>
</style>
@stop

@section('content')
	{{ HTML::survey($questions, 'FIRST SURVEY') }}
@stop

@section('script')
<script>
</script>
@stop