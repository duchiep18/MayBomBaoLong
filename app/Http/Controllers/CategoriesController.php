<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\news_post_categories;
use \App\Models\products_categories;
use MongoDB\Driver\Query;
use Session;


class CategoryController extends Controller
{
    //truy cập trang tạo danh mục cùng Categories đã tạo
    public function createNewCats(){
        $categories = news_post_categories::all();
        return view('admin.pages_danh_muc.NewsPages.createNewsCategories', compact('categories'));
    }

    //lưu Categories News
    public function storeNewCategories(Request $request) {
        $name = $request ->input ('name_categories');
        $url_cat = $request -> input('url_cat');
        $description = $request ->input('desc_cat');
        $news_categories_type = $request -> input('type_cat');

        $news_catgr = new news_post_categories;
        $news_catgr->news_categories_name = $name;
        $news_catgr->news_categories_desc = $description;
        $news_catgr->news_categories_type = $news_categories_type;
        $news_catgr->url_cat = $url_cat;
        $news_catgr->save();

        return redirect()->route('news.create_catgr');
    }
    //get trag edit news categories
    public function editCat()
    {
        $categories_news = news_post_categories::all();
        return view('admin.pages_danh_muc.NewsPages.editCategories', compact('categories_news'));
    }
    //update News Categoríe
        public function updateCat($id, Request $request){
            $newCatsEdit = news_post_categories::find($id);
            $name = $request ->input ('name_categories');
            $url_cat = $request -> input('url_cat');
            $description = $request ->input('desc_cat');
            $news_categories_type = $request -> input('type_cat');

            $news_catgr = new news_post_categories;
            $news_catgr->news_categories_name = $name;
            $news_catgr->news_categories_desc = $description;
            $news_catgr->news_categories_type = $news_categories_type;
            $news_catgr->url_cat = $url_cat;
            $news_catgr->save();

            return redirect()->route('news.create_catgr');
        }
            public function destroyNewsCat($id)
        {
            $newCatsdelete = news_post_categories::find($id);
            $newCatsdelete->delete();
            return redirect()->route('news.index');
        }

        //Route Categories Products
        //chuyển trang tạo danh mục
        public function create_prd_catgr(){
            $categories_prd = products_categories::all();
            return view('admin.pages_danh_muc.ProductPages.editCategories',compact('categories_prd'));
        }

        //hàm tạo danh mục sản phẩm
        public function storeProductCategories(Request $request){
            $id = $request->input('id');
            $prd_categories_name = $request->input('prd_cat_name');
            $prd_categories_url = $request -> input('url_prd_cat');
            $prd_categories_desc = $request -> input('prd_cat_desc');
            $prd_categories_type = $request -> input('prd_cat_type');
            $product_catgr = new products_categories;
            $product_catgr->id = $id;
            $product_catgr->product_categories_name = $prd_categories_name;
            $product_catgr->product_categories_desc = $prd_categories_desc;
            $product_catgr->product_categories_type = $prd_categories_type;
            $product_catgr->url_prd_cat = $prd_categories_url;
            $product_catgr->save();
            return redirect()->route('products.create_catgr');
        }
        public function editProductCats()
        {
            $categories_prd = products_categories::all();
            return view('')
        }
        //update News Categoríe
        public function updateCat($id, Request $request){
            $newCatsEdit = news_post_categories::find($id);
            $name = $request ->input ('name_categories');
            $url_cat = $request -> input('url_cat');
            $description = $request ->input('desc_cat');
            $news_categories_type = $request -> input('type_cat');

            $news_catgr = new news_post_categories;
            $news_catgr->news_categories_name = $name;
            $news_catgr->news_categories_desc = $description;
            $news_catgr->news_categories_type = $news_categories_type;
            $news_catgr->url_cat = $url_cat;
            $news_catgr->save();

            return redirect()->route('news.create_catgr');
        }
        public function destroyNewsCat($id)
        {
            $newCatsdelete = news_post_categories::find($id);
            $newCatsdelete->delete();
            return redirect()->route('news.index');
        }


    public function news($id){
            $category_news = news_post_categories::find($id);
            $news = $category_news->news()->paginate(5) ;
            $news = $category_news->news()->limit(10);
            return view('categories_news_and_products.categories_news', compact('news'));
        }

        public function products($id){
            $category_products = products_categories::find($id);
            $products = $category_products->products()->paginate(5);
            return view('categories_news_and_products.categories_products', compact('products'));
        }

}
