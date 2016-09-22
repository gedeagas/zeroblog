@extends('maintemp')


@section('thetitle')

Homepage

@endsection

@section('konten')

<div class="main-vd">

    <div class="container home-header-pad">
        <div class="row home-header">
            <div class="text-center col-md-2">Home</div>
            <div class="text-center col-md-2">About</div>
            <div class="text-center col-md-2">Blog</div>
            <div class="text-center col-md-2">Contact</div>
            <div class="text-center col-md-2">Project</div>
            <div class="text-center col-md-2">Work</div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="embed-responsive embed-responsive-16by9 ">   
                    <video autoplay loop>
                      <source src="video.mp4" type="video/mp4" />
                      <source src="video.ogg" type="video/ogg" />
                      Your browser does not support the video tag.
                    </video>
                </div> 
            </div>
        </div>
    </div>

    
</div>

<div class="container home-content-padding">
    <div class="row">
        <div class="col-md-6">

        <h1 class="raleway-bold">Projects</h1>

        <p class="raleway-light">
           In the last 15 years I've not only worked on hundreds of client projects, but also founded my own; A handful of companies and initiatives that I'm immensely proud of. Combined they've created products, services, events and resources that have been experienced by millions of people. Each project has, in its own way, allowed me to tell stories, meet people and grow as a designer. 
 
        </p>
            
        </div>
        <div class="col-md-6">
            
        </div>
    </div>
</div>

<div class="bg-color-abu">
<div class="container home-content-padding">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <img src="http://images.apple.com/macbook-pro/images/overview_apps_hero_2x.jpg" class="img-responsive">
        </div>
        <div class="col-md-12">
            <h1 class="raleway-bold text-center">
                Products

            </h1>

           
        </div>

        <div class="col-md-8 col-md-offset-2">
             <p class="raleway-light text-center">
                Since 2009 I've built and collaborated on a number of consumer products. Mostly apps, but also hardware and services. By far the most of them have been made with the Robocat team and lot's of amazing people took part in these adventures. Each video is presented here as it were at the launch and in reverse chronological order. 
                A journey back in time.
            </p>
        </div>
    </div>
</div>
</div>

<div class="container-fluid">

<div class="row">
    <div class="col-md-8">
        
        @foreach($posts as $post)

            <div class="post-home">

               
                <h3 class="raleway-font">{{$post->title}}</h3>
                  
                <p class="home-display-text">{{substr(strip_tags($post->body), 0, 250)}} {{ strlen($post->body) > 250 ? "..." : "" }}</p>

                <a href="{{ url('blog/'.$post->slug)}}" class="btn btn-success">Read More</a>

            </div>

        @endforeach

    </div>

    <div class="col-md-4">
        
    </div>
</div>
</div>

@endsection