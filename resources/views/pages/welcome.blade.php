@extends('maintemp')


@section('thetitle')

Homepage

@endsection

@section('konten')

<div class="jumbotron">
  <h1>Latest Blog Post</h1>
  <p>...</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Read More</a></p>
</div>

<div class="row">
    <div class="col-md-8">
        
        @foreach($posts as $post)

            <div class="post-home">

                <div class="page-header">
                  <h2>{{$post->title}}</h2>
                  
                </div>
                <p>{{substr($post->body, 0, 250)}} {{ strlen($post->body) > 250 ? "..." : "" }}</p>

                <a href="#" class="btn btn-success">Read More</a>

            </div>

        @endforeach

    </div>

    <div class="col-md-4">
        
    </div>
</div>


@endsection