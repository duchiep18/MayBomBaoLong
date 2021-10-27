<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment', 'comment_name', 'comment_date', 'cmt_product_id'
    ];
    protected $primaryKey = 'id';
    protected $table = 'table_comments';
}
