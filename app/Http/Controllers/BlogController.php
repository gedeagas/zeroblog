<?php

namespace blog\Http\Controllers;

use Illuminate\Http\Request;
use blog\Post;
use blog\Http\Requests;

class BlogController extends Controller
{
    public function getSingle($slug){
    	$post = Post::where('slug', '=', $slug)->first();

    	return view('blog.single')->withPost($post);
    }
}

