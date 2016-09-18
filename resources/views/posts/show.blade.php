@extends('maintemp')

@section('thetitle', 'View Post')

@section('konten')
	
	<h1>{{ $post->title }}</h1>

	<p class="lead">{{ $post->body }} </p>



@endsection