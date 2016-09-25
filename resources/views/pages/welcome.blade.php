@extends('maintemp')


@section('thetitle')

Homepage

@endsection

@section('konten')

<div class="main-vd">

    <div class="hidden-xs  container home-header-pad">
        <div class="row home-header">
            <div class="col-md-4">
                
            </div>

            <div class="col-md-8">
                <div class="text-center col-md-2">Home</div>
            <div class="text-center col-md-2">About</div>
            <div class="text-center col-md-2">Blog</div>
            <div class="text-center col-md-2">Contact</div>
            <div class="text-center col-md-2">Project</div>
            <div class="text-center col-md-2">Work</div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="embed-responsive embed-responsive-16by9 ">   
                    <video id="videoElementID" autoplay loop>
                      <source src="video.mp4" type="video/mp4" />
                      <source src="video.ogg" type="video/ogg" />
                      Not Supported....
                    </video>
                </div> 
            </div>
        </div>
    </div>

    
</div>

<div class="container home-content-padding">
    <div class="row">
        <div class="col-md-6">

        <h1 class="raleway-bold">Who Am I ?</h1>

        <p class="raleway-light">
          Donec semper augue et tempor sagittis. Fusce pretium sagittis sagittis. Aliquam erat volutpat. Vivamus sit amet dui neque. Sed accumsan ut purus et rutrum. Morbi et vulputate orci. Etiam maximus, lacus nec blandit fermentum, turpis lacus sodales dui, eget tristique nulla velit et erat. Maecenas a dolor sit amet urna viverra cursus non fringilla velit.
 
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
                Donec semper augue et tempor sagittis. Fusce pretium sagittis sagittis. Aliquam erat volutpat. Vivamus sit amet dui neque. Sed accumsan ut purus et rutrum. Morbi et vulputate orci. Etiam maximus, lacus nec blandit fermentum, turpis lacus sodales dui, eget tristique nulla velit et erat. Maecenas a dolor sit amet urna viverra cursus non fringilla velit.
            </p>
        </div>
    </div>
</div>
</div>

<div class="container home-content-padding">
    <div class="row">
        <div class="col-md-6">

        
            
        </div>
        <div class="col-md-6">
            <h1 class="raleway-bold">Internet Of Things</h1>

            <p class="raleway-light">
               Donec semper augue et tempor sagittis. Fusce pretium sagittis sagittis. Aliquam erat volutpat. Vivamus sit amet dui neque. Sed accumsan ut purus et rutrum. Morbi et vulputate orci. Etiam maximus, lacus nec blandit fermentum, turpis lacus sodales dui, eget tristique nulla velit et erat. Maecenas a dolor sit amet urna viverra cursus non fringilla velit.
     
            </p>
        </div>
    </div>
</div>


<div class="bg-color-biru">
<div class="container-fluid home-content-padding">
    <div class="row">
        <div class="col-md-12">
            <h1 class="font-color-white raleway-bold text-center">
                Curriculum Vitae

            </h1>

           
        </div>

        <div class="col-md-8 col-md-offset-2">
             <p class="font-color-white raleway-light text-center">
                Donec semper augue et tempor sagittis. Fusce pretium sagittis sagittis. Aliquam erat volutpat. Vivamus sit amet dui neque. Sed accumsan ut purus et rutrum. Morbi et vulputate orci. Etiam maximus, lacus nec blandit fermentum, turpis lacus sodales dui, eget tristique nulla velit et erat. Maecenas a dolor sit amet urna viverra cursus non fringilla velit.
            </p>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <img src="http://images.apple.com/macbook-pro/images/overview_apps_hero_2x.jpg" class="img-responsive">
        </div>
    </div>
</div>
</div>


<div class="container-fluid">

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        
        @foreach($posts as $post)

            <div class="post-home col-md-3">

               
                <h3 class="raleway-font">{{$post->title}}</h3>
                  
                <p class="home-display-text">{{substr(strip_tags($post->body), 0, 250)}} {{ strlen($post->body) > 250 ? "..." : "" }}</p>

                <a href="{{ url('blog/'.$post->slug)}}" class="btn btn-success">Read More</a>

            </div>

        @endforeach

    </div>

   
</div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
   $('#videoElementID').bind('contextmenu',function() { return false; });
});
</script>

@endsection