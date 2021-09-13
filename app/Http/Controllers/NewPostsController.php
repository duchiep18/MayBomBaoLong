<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Models\news_post;
use App\Models\news_post_categories;


class NewPostsController extends Controller
{
     //function get trang tin tức phần Admin
     public function index(){
        return view('admin.pages_danh_muc.NewsPages.news_list');
    }
  
    //truy cập trang tạo bài viết
    public function create()
    {
        $categories = news_post_categories::all();
        return view('admin.pages_danh_muc.NewsPages.createNews', compact('categories'));
    }

    //truy cập trang tạo danh mục
    public function create_catgr(){
        return view('admin.pages_danh_muc.NewsPages.createNewsCategories');
    }
    //phân trang quản lý tin tức
    public function getNews(Request $request){
        $query =news_post::query();
        $news = $query->paginate(10);
        // $news = posts::paginate(4);
        return view('admin.pages_danh_muc.NewsPages.news_list', compact('news'));
    }
      //tìm kiếm bài viết
      public function search_news(Request $request)
      {
          $keywordnews = $request->input('keywordsearch_news');
          $newsQuery = news_post::query();
          if($keywordnews) 
          {
              $newsQuery->where('title', 'like', "%{$keywordnews}%");
          } 
          $new = $newsQuery->paginate(10);
          return view('admin.pages_danh_muc.NewsPages.news_list', compact('new'));
      }
    //tạo chuyên mục tin tức
    public function storeCategories(Request $request) {
        $id = $request ->input('id');
        $name = $request ->input ('tendanhmuc');
        $description = $request ->input('motadanhmuc');
        $news_categories_type = $request -> input('loaidanhmuc');        
        
        $news_catgr = new news_post_categories;
        $news_catgr->id = $id;
        $news_catgr->news_categories_name = $name; 
        $news_catgr->news_categories_desc = $description;
        $news_catgr->news_categories_type = $news_categories_type;
        $news_catgr->save(); 

        return redirect()->route('news.create');
    }

    //tạo bai viết
    public function storeData(Request $request){
        $id = $request -> input('id');
        $title = $request -> input('tenbaiviet');
        $category_news_id = $request -> input('loaitintuc');
        $description = $request -> input('motabaiviet');
        $content = $request -> input('noidungbaiviet');
        $status = $request -> input('trang_thai');
        $new = new news_post;
        $new->id = $id;
        $new->title = $title;
        $new->category_news_id = $category_news_id;
        $new->description = $description;
        $new->content = $content;
        $new->status = $status;
        $new->save();
        return redirect()->route('news.index');
    }
    //sang trang edit tin tức
    public function edit($id){
        $categories = news_post_categories::all();
        $new = news_post::find($id);
        return view ('admin.pages_danh_muc.NewsPages.editNews', compact('new', 'categories'));
    }
    //update tin tức
    public function update($id, Request $request)
    {
        $newupdate = news_post::find($id);
        $category_id = $request -> input('loaitintuc');
        $title = $request -> input('tenbaiviet');
        $description = $request -> input('motabaiviet');
        $content = $request -> input('noidungbaiviet');
        $image = $request -> input('anhbaiviet');
        $status = $request -> input('trang_thai');
        $created_at = $request -> input('created_at');
        $updated_at = $request -> input('updated_at');
      
        $newupdate->category_id = $category_id;
        $newupdate->title = $title;
        $newupdate->description = $description;
        $newupdate->content = $content;
        $newupdate->image = $image;
        $newupdate->status = $status;
        $newupdate->created_at = $created_at; 
        $newupdate->updated_at = $updated_at;
        $newupdate->save();
        return redirect()->route('news.index');
    }
    //hàm hủy bài viết  
    public function destroy($id)
    {
        $newdelete = news_post::find($id);
        $newdelete->delete();
        return redirect()->route('news.index');    
    }

}
