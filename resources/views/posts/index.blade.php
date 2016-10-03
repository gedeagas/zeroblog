@extends('maintemp')

@section('thetitle', 'All Post')

@section('konten')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
			<ul class="nav nav-pills nav-stacked">
			  <li role="presentation" class="active"><a href="#">Dashboard</a></li>
			  <li role="presentation"><a href="{{ route('categories.index')}}">Categories</a></li>
			  <li role="presentation"><a href="#">Tags</a></li>
			</ul>
		</div>

		<div class="col-md-10">

			<div class="row">
				<div class="col-md-10">
					<h1>All Posts</h1>
					
				</div>

				<div class="col-md-2">
					<a href="{{ route('posts.create')}}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post</a>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<th>#</th>
							<th>Title</th>
							<th>Body</th>
							<th>Created At</th>
							<th></th>
						</thead>

						<tbody>
							
							@foreach ($posts as $post)
							
							<tr>
								<th>{{$post->id}}</th>
								<td>{{$post->title}}</td>
								<td>{{substr(strip_tags($post->body), 0, 250)}} {{ strlen($post->body) > 250 ? "..." : "" }}</td>
								<td>{{date('M j, Y', strtotime($post->created_at))}}</td>
								<td>
								<a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">View</a>
								<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a>
								</td>

							</tr>

							@endforeach

						</tbody>
					</table>
					<div class="text-center">
						{!! $posts->links(); !!}
						<br>
						Total Page : {!! $posts->total(); !!}

					</div>
				</div>
			</div>


		</div>
	</div>
</div>
@stop