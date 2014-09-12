@extends('layouts.user')

@section('content')
	{{ HTML::survey($questions, 'FIRST SURVEY') }}
@stop