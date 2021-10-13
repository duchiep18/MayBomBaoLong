<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'products_categories';

    public function products(){
        return $this->hasMany('App\Models\Product', 'categories_prd_id', 'id');
    }
}
