@extends('maintemp')

@section('thetitle', "$post->title")

@section('konten')

<div class="row">
	<div class="col-md-8 col-md-offset-2 raleway-font">
		<h1 class="raleway-font">{{$post->title}}</h1>
		<p class="">{!!$post->body!!}</p>
	</div>

</div>

@endsection