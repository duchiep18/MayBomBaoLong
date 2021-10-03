<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\PostCategory;
use Mysql\Driver\Query;
use Session;


class NewCategoryController extends Controller
{
    //truy cập trang tạo danh mục cùng Categories đã tạo
    public function create(){
        $query = PostCategory::query();
        $categories = $query->paginate(10);
        $new_catgr = PostCategory::where('category_parent', 0)->orderby('id','DESC')->get();
        return view('admin.pages_danh_muc.NewsPages.createNewsCategories', compact('categories','new_catgr'));
    }

    //lưu Categories News
    public function storeCat(Request $request) {
        $name = $request ->input ('name_categories');
        $url_cat = $request -> input('url_cat');
        $cat_parent = $request ->input('cat_parent');
        $description = $request ->input('desc_cat');
        $news_categories_type = $request -> input('type_cat');

        $news_catgr = new PostCategory;
        $news_catgr->news_categories_name = $name;
        $news_catgr->url_cat = $url_cat;
        $news_catgr->category_parent = $cat_parent;
        $news_catgr->news_categories_desc = $description;
        $news_catgr->news_categories_type = $news_categories_type;
        $news_catgr->category_parent = $cat_parent;
        $news_catgr->save();

        return redirect()->route('news.create_catgr');
    }
    //get trag edit news categories
    public function edit($id)
    {
        $categories = PostCategory::all();
        $new_catgr_parent = PostCategory::where('category_parent', 0)->orderby('id','DESC')->get();
        $news_catgr = PostCategory::find($id);
        return view('admin.pages_danh_muc.NewsPages.editCategories', compact('categories','news_catgr','new_catgr_parent'));
    }
    //update News Categoríe
        public function updateCat($id, Request $request)
        {
            $newcatupdate = PostCategory::find($id);
            $name = $request ->input ('name_categories');
            $url_cat = $request -> input('url_cat');
            $cat_parent = $request ->input('cat_parent');
            $description = $request ->input('desc_cat');
            $news_categories_type = $request -> input('type_cat');

            $newcatupdate->news_categories_name = $name;
            $newcatupdate->url_cat = $url_cat;
            $newcatupdate->category_parent = $cat_parent;
            $newcatupdate->news_categories_desc = $description;
            $newcatupdate->news_categories_type = $news_categories_type;
            $newcatupdate->save();

            return redirect()->route('news.create_catgr');
        }

            public function destroy($id)
        {
            $newCatsdelete = PostCategory::find($id);
            $newCatsdelete->delete();
            return redirect()->route('news.create_catgr');
        }


    public function news($id){
            $category_news = PostCategory::find($id);
            $news = $category_news->news()->paginate(5) ;
            return view('categories_news_and_products.categories_news', compact('news'));
        }


}
