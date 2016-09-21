@extends('maintemp')


@section('thetitle')

Homepage

@endsection

@section('konten')


<div class="row">
    <div class="col-md-8">
        
        @foreach($posts as $post)

            <div class="post-home">

               
                <h3>{{$post->title}}</h3>
                  
                <p>{{substr(strip_tags($post->body), 0, 250)}} {{ strlen($post->body) > 250 ? "..." : "" }}</p>

                <a href="{{ url('blog/'.$post->slug)}}" class="btn btn-success">Read More</a>

            </div>

        @endforeach

    </div>

    <div class="col-md-4">
        
    </div>
</div>


@endsection