<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewPost extends Model
{
    protected $table = 'news_post';

    public function news_category() {
        return $this->belongsTo('App\Models\PostCategory', 'category_news_id', 'id');
    }
}
