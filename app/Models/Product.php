<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function products_category() {
        return $this->belongsTo('App\Models\ProductCategory', 'categories_prd_id', 'id');
    }
    public function comments(){
        return $this->hasMany('App\Models\Comment', 'cmt_product_id', 'id');
    }

}
