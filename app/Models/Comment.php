<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment_name','comment','comment_status','cmt_product_id'
    ];
    protected $primaryKey = 'id';
    protected $table = 'comments';
}
