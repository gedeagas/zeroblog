<?php

namespace blog\Http\Controllers;

use Illuminate\Http\Request;

use blog\Http\Requests;
use blog\Post;
use Session;

class PostController extends Controller
{


    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Create Varable and store all the blog post 

        $posts = Post::orderBy('id', 'desc')->paginate(5);


        // Return a view and shoing to the user 

        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate Data
        // Harus di Validasi tidak boleh jebol gan 
        // CC Agastya Darma ( Security Advisor )


        //CRF Protection
        //Agastya Darma Laksana 
        //Security Advisor

        //SERVER SIDE VALIDATION IS REQUIRED 

        $this->validate($request, array(
                'title' => 'required|max:255',
                'slug'  => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'body'  => 'required'
                


            ));
        $post = new Post;

        $post->title    = $request->title;
        $post->slug     = $request->slug;
        $post->body     = $request->body;

        $post->save();

        Session::flash('success', 'The blog post was successfully save');

        return redirect()->route('posts.show', $post->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the post
        // cari post dengan id nya gan

        $post = Post::find($id);

        return view('posts.edit')->withPost($post);

        // return the view pass in the information
        // masukin var ke html
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validate the data ( awas indonesia banyak heker ngeri cuy )
        $post = Post::find($id);

        if($request->input('slug') == $post->slug){

            $this->validate($request, array(
                'title' => 'required|max:255',
                'body'  => 'required'


            ));

        } else {

            $this->validate($request, array(
                'title' => 'required|max:255',
                'slug'  => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'body'  => 'required'


            ));

        }
        

        //Save The Data jan lupa di save ke db gan
        $post  = Post::find($id);

        $post->title    =   $request->input('title');
        $post->slug     =   $request->input('slug');
        $post->body     =   $request->input('body');


        $post->save();



        //Redirect and Alret man wkwkwk 

        Session::flash('success', 'This post was successfully saved.');

        //The Redirect 

        return redirect()->route('posts.show', $post->id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        Session::flash('success', 'The post was successfully deleted');
        return redirect()->route('posts.index');
    }
}
