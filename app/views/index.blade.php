@extends('_master')

@section('content')
	
	
	<h2>Generate random Lorem Ipsum text:</h2>
	<p>Generate up to 99 paragraphs of random filler text for your applications..<br></p>
	
	@include('lorem_form')
	
	<br>
	
	<h2>Generate random user information:</h2>
	<p>Create random user data for your applications. (Optionally, include emails, <a href="http://xkcd.com/936">xkcd-style passwords</a>,
	birthdays and locations.)</p>
	
	@include('users_form')
	
	<br>
	

@stop
