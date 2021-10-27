<?php

namespace App\Http\Controllers;

use App\Models\ImageGallery;
use Session;
use Illuminate\Http\Request;
use App\Models\NewPost;
use App\Models\PostCategory;
use Carbon\Carbon;
use DB;
use App\Models\Product;
class NewPostController extends Controller
{
    //Get tới trag Post List, phân trang quản lý tin tức
    public function getNews(Request $request){
        $query =NewPost::query();

        $keywordnews = $request->input('keywordnews');
        $postbyCatgr = $request->input('postbyCategories_id');
        $postbyStatus = $request->input('postbyStatus');

        if('$keywordnews'){
            $query -> where('title', 'like', "%{$keywordnews}%" );
        }

        if('$postbyCatgr'){
            $query -> where('category_news_id', 'like',  "%{$postbyCatgr}%");
        }
        if('$postbyStatus'){
            $query -> where('status', 'like',  "%{$postbyStatus}%" );
        }

        $query->latest('id')->get();
        $news = $query->paginate(10);
        $categories = PostCategory::orderby('id','desc')->get();
        $allselectDate = DB::table('news_post')->whereMonth('created_at','')->get();
        return view('admin.pages_danh_muc.NewsPages.news_list', compact('news','categories','allselectDate'));
    }


    //Chuyền categories đến trag Create Post
    public function create()
    {
        $query = PostCategory::query();
        $categories = $query->orderBy('id','desc')->get();
        return view('admin.pages_danh_muc.NewsPages.createNews', compact('categories'));
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
    public function postsDetail($id){
        $postDetail = NewPost::find($id);
        $query = Product::query();
        $products_new = $query->orderby('id','desc')->limit(10)->get();
        $all_categories_prd = DB::table('products_categories')->where('product_categories_type','Hiển thị')->orderBy('id','asc')->get();
        $all_categories_post = PostCategory::all();
        $all_SL_BN_home = ImageGallery::orderby('id','desc')->get();

        return view('client.page.PostDetail', compact('postDetail','products_new','all_categories_prd','all_categories_post','all_SL_BN_home'));
    }

}
