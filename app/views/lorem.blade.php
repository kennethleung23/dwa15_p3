@extends('_master')

@section('title')
	Lorem Ipsum Generator
@stop

@section('content')

	<h2>Generate random Lorem Ipsum text:</h2>
	@include('lorem_form')
	
	<br><br>
	{{ $lorem or '' }} 

@stop