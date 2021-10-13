<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Session;
use DB;

class HomeController extends Controller
{
    //    Đổ dl product ra home
//đổ dl sản phẩm và danh mục sản phẩm ra trang Home
    public function getDatatHome(Request $request){
        $query = Product::query();

        $products = $query->limit(5)->get();

        $products_new = $query->orderby('id','desc')->limit(10)->get();

        $categories_prd = DB::table('products_categories')->where('product_categories_type','Hiển thị')->orderBy('id','asc')->get();

        return view('client.page.home', compact('products', 'products_new', 'categories_prd'));
    }
 public function getDatatShop(Request $request){
        $query = Product::query();

        $products = $query->paginate(25);

        $products_new = $query->orderby('id','desc')->limit(10)->get();

        $categories_prd = DB::table('products_categories')->where('product_categories_type','Hiển thị')->orderBy('id','asc')->get();

        return view('client.products.ShopProducts', compact('products', 'products_new', 'categories_prd'));
    }


//Lấy ra sản phẩm theo danh mục sản phẩm trang Home
    public function show_catPrd_home($id){
        $category_prd = ProductCategory::find($id);
        $products = $category_prd->products()->paginate(5);
        return view('category.show_catPrd_home', compact('products'));
    }

}
