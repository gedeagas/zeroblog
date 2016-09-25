<?php

namespace blog;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';

    public function posts() {
    	return $this->hasMany('blog\Post');
    }
}
