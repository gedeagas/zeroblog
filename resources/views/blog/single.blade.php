@extends('maintemp')

@section('thetitle', "$post->title")

@section('konten')
<div class="container-fluid">
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<ol class="breadcrumb">
		  <li><a href="#">Home</a></li>
		  <li><a href="#">{{ $post->category->name }}</a></li>
		  <li class="active">{{ $post->title }}</li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-md-8 col-md-offset-2 raleway-font">
		<h1 class="raleway-font">{{$post->title}}</h1>
		<p class="raleway-bold">By, Agastya Darma Laksana</p>
		
		<p class="">{!!$post->body!!}</p>
		
	</div>
	<div class="col-md-8 col-md-offset-2 raleway-font">
	<hr>
	<p>Posted In : {{ $post->category->name }}</p>
	</div>

	
</div>
</div>
@endsection