@extends('maintemp')

@section('thetitle', 'Buat Post Baru')

@section('customhead')
<link href="/css/parsley.css" rel="stylesheet">

<script src="/js/parsley.min.js"></script>



@endsection


@section('konten')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>
			    


			{!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}

				{{ Form::label('title', 'Title :')}}
				{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

				{{ Form::label('body', 'Blog Post :')}}
				{{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

				{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block button-post-margin'))}}
			    
			{!! Form::close() !!}
		</div>
	</div>


@endsection