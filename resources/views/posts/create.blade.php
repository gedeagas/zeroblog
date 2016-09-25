@extends('maintemp')

@section('thetitle', 'Buat Post Baru')

@section('customhead')
<link href="/css/parsley.css" rel="stylesheet">

<script src="/js/parsley.min.js"></script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

<script>
tinymce.init({ 
	selector:'textarea' 
});
</script>



@endsection


@section('konten')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>
			    


			{!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}

				{{ Form::label('title', 'Title :')}}
				{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

				{{ Form::label('slug', 'Slug :')}}
				{{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlegth' => '5', 'maxlength' => '255'))}}

				{{ Form::label('category_id', 'Category :')}}
				<select name="category_id" class="form-control">
					@foreach($categories as $category)
						<option value="{{ $category->id }}">{{ $category->name }}</option>

					@endforeach
				</select>
		
				{{ Form::label('body', 'Blog Post :')}}
				{{ Form::textarea('body', null, array('class' => 'form-control')) }}

				{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block button-post-margin'))}}
			    
			{!! Form::close() !!}
		</div>
	</div>


@endsection