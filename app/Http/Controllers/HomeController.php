<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Models\NewPost;
use App\Models\PostCategory;
use Session;
use DB;

class HomeController extends Controller
{
    //    Get trang giới thiệu
    public function getDataIntroduce(Request $request){
        $query = Product::query();

        $products_new = $query->orderby('id','desc')->limit(10)->get();

        $all_categories_prd = DB::table('products_categories')->where('product_categories_type','Hiển thị')->orderBy('id','asc')->get();
        $all_categories_post = PostCategory::all();

        $posts = DB::table('news_post')-> where('id', '16')->get();
        return view('client.page.introduce', compact('products_new', 'all_categories_prd','posts','all_categories_post'));
    }
//đổ dl sản phẩm và danh mục sản phẩm ra trang Home

    public function getDatatHome(Request $request){
        $query = Product::query();

        $products_by_category = $query->orderBy('id','desc')->get();

        $products_new = $query->orderby('id','desc')->limit(10)->get();

        $all_categories_prd = DB::table('products_categories')->where('product_categories_type','Hiển thị')->orderBy('id','asc')->get();

        $all_categories_post = PostCategory::all();

        $all_posts_home = NewPost::where('status', 'Đăng ngay')->orderby('id', 'desc')->get();

        return view('client.page.home', compact('products_by_category', 'products_new', 'all_categories_prd','all_posts_home','all_categories_post'));
    }
 public function getDatatShop(Request $request){
        $query = Product::query();

        $products = $query->orderby('id','desc')->paginate(25);

        $products_new = $query->orderby('id','desc')->limit(10)->get();

        $all_categories_prd = DB::table('products_categories')->where('product_categories_type','Hiển thị')->orderBy('id','asc')->get();
         $all_categories_post = PostCategory::all();

     return view('client.products.ShopProducts', compact('products', 'products_new', 'all_categories_prd','all_categories_post'));
    }


//Lấy ra sản phẩm theo danh mục sản phẩm trang Home
    public function showPrdByCatgr($id){
        $category_prd = ProductCategory::find($id);
        $products_by_catgr = $category_prd->products()->paginate(25);

        $all_posts_home = NewPost::where('status', 'Đăng ngay')->orderby('id', 'desc')->get();
        $query = Product::query();
        $products_new = $query->orderby('id','desc')->limit(10)->get();
        $all_categories_prd = DB::table('products_categories')->where('product_categories_type','Hiển thị')->orderBy('id','asc')->get();
        $all_categories_post = PostCategory::all();

        return view('category.show_catPrd_home', compact('products_by_catgr', 'all_posts_home','products_new','category_prd','all_categories_prd','all_categories_post'));
    }
//Lấy ra sản phẩm theo danh mục sản phẩm trang Tin tức
    public function getDataPosts(){

        $all_posts_home = NewPost::where('status', 'Đăng ngay')->orderby('id', 'desc')->get();
        $query = Product::query();
        $products_new = $query->orderby('id','desc')->limit(10)->get();
        $all_categories_prd = DB::table('products_categories')->where('product_categories_type','Hiển thị')->orderBy('id','asc')->get();
        $all_categories_post = PostCategory::all();

        return view('client.page.allPosts', compact( 'all_posts_home','products_new','all_categories_prd','all_categories_post'));
    }

}
