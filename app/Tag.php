<?php

namespace blog;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts() {
    	//default laravel convenction 
    	//Tag + Post
    	//post_tag ( becaue p came before the t)
    	return $this->belongsToMany('App\Post', 'post_tag');
    }
}
