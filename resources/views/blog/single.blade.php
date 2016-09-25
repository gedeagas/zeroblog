@extends('maintemp')

@section('thetitle', "$post->title")

@section('konten')
<div class="container-fluid">

<div class="row">
	<div class="col-md-8 col-md-offset-2 raleway-font">
		<h1 class="raleway-font">{{$post->title}}</h1>
		<p class="raleway-bold">Agastya Darma Laksana</p>
		<p class="raleway-light">CEO Of Archipel Corp</p>
		<p class="">{!!$post->body!!}</p>
		<hr>
		<p>Posted In : {{ $post->category->name }}</p>
	</div>

</div>
</div>
@endsection