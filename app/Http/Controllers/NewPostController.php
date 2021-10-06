<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Models\NewPost;
use App\Models\PostCategory;


class NewPostController extends Controller
{
    //Get tới trag Post List, phân trang quản lý tin tức
    public function getNews(Request $request){
        $keywordnews = $request->input('keywordnews');

        $query =NewPost::query();

        if('$keywordnews'){
            $query -> where('title', 'like', "%{$keywordnews}%" );
        }
      $news = $query->paginate(5);
        return view('admin.pages_danh_muc.NewsPages.news_list', compact('news'));
    }


    //Chuyền categories đến trag Create Post
    public function create()
    {
        $categories = PostCategory::all();
        return view('admin.pages_danh_muc.NewsPages.createNews', compact('categories'));
    }

      //tìm kiếm bài viết
      public function search_news(Request $request)
      {
          $newsQuery = NewPost::query();
          $keywordnews = $request->input('keywordnews');
          if($keywordnews)
          {
              $newsQuery->where('title', 'like', "%{$keywordnews}%");
          }
          $new = $newsQuery->paginate(10);
          return view('admin.pages_danh_muc.NewsPages.news_list', compact('new'));
      }

    //tạo bai viết
    public function storeData(Request $request){
        $title = $request -> input('title');
        $category_news_id = $request -> input('category_news_id');
        $content = $request -> input('content');
        $description = $request -> input('description');
        $url_post = $request->input('url_post');
        $image = str_replace(url('responsive_filemanager/source').'/', '', $request->image_post);
        $tags_post = $request->input('tags_post');
        $status = $request -> input('status');

        $new = new NewPost;
        $new->title = $title;
        $new->category_news_id = $category_news_id;
        $new->content = $content;
        $new->description = $description;
        $new->url_post = $url_post;
        $new->image_post = $image;
        $new->tags_post = $tags_post;
        $new->status = $status;
        $new->save();
        return redirect()->route('news.index');
    }
    //sang trang edit tin tức
    public function edit($id){
        $categories = PostCategory::all();
        $new = NewPost::find($id);
        return view ('admin.pages_danh_muc.NewsPages.editNews', compact('new', 'categories'));
    }
    //update tin tức
    public function update($id, Request $request)
    {
        $newupdate = NewPost::find($id);
        $title = $request -> input('title');
        $category_news_id = $request -> input('category_news_id');
        $content = $request -> input('content');
        $description = $request -> input('description');
        $url_post = $request->input('url_post');
        $image = str_replace(url('responsive_filemanager/source').'/', '', $request->image);
        $tags_post = $request -> input('tags_post');
        $status = $request -> input('status');

        $newupdate->title = $title;
        $newupdate->category_news_id = $category_news_id;
        $newupdate->content = $content;
        $newupdate->description = $description;
        $newupdate->image_post = $image;
        $newupdate->url_post = $url_post;
        $newupdate->tags_post = $tags_post;
        $newupdate->status = $status;
        $newupdate->save();
        return redirect()->route('news.index');
    }
    //hàm hủy bài viết
    public function destroy($id)
    {
        $newdelete = NewPost::find($id);
        $newdelete->delete();
        return redirect()->route('news.index');
    }

}
