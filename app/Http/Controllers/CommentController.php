<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\ImageGallery;
use App\Models\PostCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use App\Models\NewPost;


class CommentController extends Controller
{
    public function insertComment($id,Request $request){

        $request->validate(
        [
            'comment_name' => 'required',
            'comment' => 'required|max:255',
        ],[
            'comment_name.required' => 'Bạn cần nhập tên của mình',
            'comment.required' => 'Hãy nhập bình luận của bạn !',
            'comment.max' => 'Bình luận của bạn quá dài!',
        ]);

        $query = Product::query();
        $products_new = $query->orderby('id','desc')->limit(10)->get();
        $all_categories_prd = DB::table('products_categories')->where('product_categories_type','Hiển thị')->orderBy('id','asc')->get();
        $products = $query->orderby('id','desc')->paginate(6);
        $all_categories_post = PostCategory::all();
        $all_SL_BN_home = ImageGallery::orderby('id','desc')->get();

        $prdDetail = Product::find($id);
        $cmt_name = $request->input('comment_name');
        $comment = $request->input('comment');
        $cmt_status = $request->input('cmt_status');
        $cmt_product_id = $request->input('cmt_product_id');

        $cmt_prd = new Comment;
        $cmt_prd->comment_name = $cmt_name;
        $cmt_prd->comment = $comment;
        $cmt_prd->comment_status = $cmt_status;
        $cmt_prd->cmt_product_id = $cmt_product_id;
        $cmt_prd->comment_parent_id = 0;
        $cmt_prd->save();

        return view('client.page.productDetail', compact('prdDetail','products_new','all_categories_post','all_categories_prd','all_SL_BN_home','products'))
            ->with('message', 'Bình luận thành công ! Chờ duyệt');
    }
    public function manageComments(){
        $query = Comment::query();
        $allcomments = $query->paginate(25);
        return view('admin.pages_danh_muc.all_comments', compact('allcomments'));
    }
    public function allow_comment(Request $request){
        $data = $request->all();
        $comment = Comment::find($data['comment_id']);
        $comment->comment_status = $data['comment_status'];
        $comment->save();
    }
    public function showCmtbyPrd($id){
        $prdDetail = Product::find($id);
        $cmt_by_prd = $prdDetail->comment()->paginate(25);

        return view('client.page.productDetail', compact('cmt_by_prd','prdDetail'));
    }
    public function reply_comment(Request $request){
        $data = $request->all();
        $rep_cmt = new Comment();
        $rep_cmt->comment = $data['rep_comment'];
        $rep_cmt->comment_parent_id = $data['comment_id'];
        $rep_cmt->cmt_product_id = $data['comment_product_id'];
        $rep_cmt->comment_status = 0;
        $rep_cmt->comment_name = 'Công ty TNHH Bảo Long';
        $rep_cmt->save();

    }
    public function destroy($id){
        $cmtDel = Comment::find($id);
        $cmtDel->delete();
        $query = Comment::query();
        $allcomments = $query->paginate(25);
        return view('admin.pages_danh_muc.all_comments',compact('allcomments'));

    }
}
