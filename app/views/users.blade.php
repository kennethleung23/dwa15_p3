@extends('_master')

@section('title')
	User Data Generator
@stop

@section('content')

	<h2>Generate random user information:</h2>
	@include('users_form')
	
	<br><br>
	{{ $users or '' }} 

@stop