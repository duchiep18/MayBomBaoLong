<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $table = 'news_post_categories';
    public function posts(){
        return $this->hasMany('App\Models\NewPost', 'category_news_id', 'id');
    }
}
