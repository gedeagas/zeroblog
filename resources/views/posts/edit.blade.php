@extends('maintemp')

@section('thetitle', 'Edit Blog Post')

@section('customhead')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

<script>
tinymce.init({ 
	selector:'textarea',
	font_formats: 'Raleway=Raleway,sans-serif;'
 
});
</script>
@endsection

@section('konten')
<div class="container">
	<div class="row">

		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PATCH']) !!}

		<div class="col-md-8">
			{{ Form::label('title', 'Title:')}}
			{{ Form::text('title', null, ["class" => 'form-control input-lg']) }}
			{{ Form::label('slug', 'Slug:', ['class' => 'form-spacing-top'])}}
			{{ Form::text('slug', null, ["class" => 'form-control']) }}

			{{ Form::label('category_id', 'Category :')}}
			{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}


			{{ Form::label('body', 'Body:', ['class' => 'form-spacing-top'])}}
			{{ Form::textarea('body', null, ["class" => 'form-control']) }}

		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">

					<dt>Created At :</dt>
					<dd>{{ date('j M, Y H:i', strtotime($post->created_at)) }}</dd>

				</dl>
			

			
				<dl class="dl-horizontal">

					<dt>Last Updated :</dt>
					<dd>{{ date('j M, Y H:i', strtotime($post->updated_at)) }}</dd>
					

				</dl>
			
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
						
						
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block'])}}



					</div>
				</div>

			
			</div>
			
			{!! Form::close() !!}

		</div>




@endsection