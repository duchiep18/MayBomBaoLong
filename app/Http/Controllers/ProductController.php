<?php

namespace App\Http\Controllers;

use App\Models\ImageGallery;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Comment;
use Session;
use DB;


class ProductController extends Controller
{
     public function getProduct_admin(Request $request){
         $query = Product::query();
         $keywordproducts = $request->input('keywordprd');
         $prdbyCat = $request->input('PrdbyCat');
         $prdbyStatus = $request->input('PrdbyStatus');

         if($keywordproducts) {
             $query->where('products_name','like', "%{$keywordproducts}%");
         }
         if($prdbyCat) {
             $query->where('categories_prd_id','like', "%{$prdbyCat}%");
         }
         if($prdbyStatus) {
             $query->where('status','like', "%{$prdbyStatus}%");
         }
         $query->latest('id')->get();
         $products = $query->paginate(10);
         $categories_prd = ProductCategory::all();

         return view('admin.pages_danh_muc.ProductPages.products_list', compact('products','categories_prd'));
    }

    //get trang tạo sản phẩm
    public function create_prd(){
        $categories_prd = ProductCategory::all();
        return view('admin.pages_danh_muc.ProductPages.createProducts', compact('categories_prd'));
    }

    //tìm kiếm, đổ dl ra trang qly

    //đổ dl ra trang Home sau khi Login
    // public function getProduct_Login(Request $request){
    //     $query = products::query();
    //     $product = $query->paginate(6);
    //     // $product = products::paginate(4);
    //     return view('client.page.homeLogin', compact('product'));
    // }

    //hàm lưu sản phẩm vào csdl
    public function storeData(Request $request){
        $prd_name = $request->input('name_products');
        $categories_prd_id = $request->input('categories_prd');
        $prd_content = $request->input('content');
        $prd_desc = $request->input('description');
        $prd_price = $request->input('price');
        $prd_price_sale= $request->input('price_sale');
        $image = str_replace(url('responsive_filemanager/source').'/', '', $request->image);
        $request->merge(['image'=>$image]);
        $image_list = str_replace(url('responsive_filemanager/source').'/', '', $request->image_list);
        $request->merge(['image_list'=>$image_list]);
        $prd_tags = $request->input('tags_prd');
        $prd_url =$request->input('url_prd');
        $prd_status = $request->input('status');

        $product = new Product;
        $product->products_name =  $prd_name ;
        $product->categories_prd_id = $categories_prd_id;
        $product->products_content =  $prd_content ;
        $product->products_description = $prd_desc ;
        $product->products_content = $prd_content;
        $product->price =  $prd_price ;
        $product->sale_price =  $prd_price_sale ;
        $product->image_product = $image;
        $product->image_list_product = $image_list;
        $product->url_prd = $prd_url;
        $product->tags = $prd_tags;
        $product->status = $prd_status ;
        $product->save();
        return redirect()->route('products.index');

     }
     //chuyển đến trang edit sản phẩm
     public function edit($id){
        $categories_prd = ProductCategory::all();
        $product = Product::find($id);
        return view ('admin.pages_danh_muc.ProductPages.editProduct',compact('product','categories_prd'));
    }
    //hàm cập nhật sản phẩm
    public function update($id, Request $request)
    {
        $productupdate = Product::find($id);
        $prd_name = $request->input('name_products');
        $categories_prd_id = $request->input('categories_prd');
        $prd_content = $request->input('content');
        $prd_desc = $request->input('description');
        $prd_price = $request->input('price');
        $prd_price_sale= $request->input('price_sale');
        $image = str_replace(url('responsive_filemanager/source').'/', '', $request->image);
        $image_list = str_replace(url('responsive_filemanager/source').'/', '', $request->image_list);
        $prd_tags = $request->input('tags_prd');
        $prd_url =$request->input('url_prd');
        $prd_status = $request->input('status');

        $productupdate->products_name = $prd_name;
        $productupdate->categories_prd_id = $categories_prd_id;
        $productupdate->products_content = $prd_content;
        $productupdate->products_description = $prd_desc;
        $productupdate->price = $prd_price;
        $productupdate->sale_price = $prd_price_sale;
        $productupdate->image_product = $image;
        $productupdate->image_list_product = $image_list;
        $productupdate->tags = $prd_tags;
        $productupdate->url_prd = $prd_url;
        $productupdate->status = $prd_status;
        $productupdate->save();
        return redirect()->route('products.index');
    }

    //hàm hủy sản phẩm
    public function destroy($id){
        $productdelete = Product::find($id);
        $productdelete->delete();

        return redirect()->route('products.index');
    }
    public function productDetail($id){
        $prdDetail = Product::find($id);
        $query = Product::query();
        $products_new = $query->orderby('id','desc')->limit(10)->get();
        $all_categories_prd = DB::table('products_categories')->where('product_categories_type','Hiển thị')->orderBy('id','asc')->get();
        $products = $query->orderby('id','desc')->paginate(6);
        $all_categories_post = PostCategory::all();
        $all_SL_BN_home = ImageGallery::orderby('id','desc')->get();

        return view('client.page.productDetail', compact('prdDetail','products_new','all_categories_prd','products','all_categories_post','all_SL_BN_home'));
    }
    public function insertComment($id, Request $request){
         $prdDetail = Product::find($id);
         $cmt_name = $request->input('comment_name');
         $comment = $request->input('comment');
         $cmt_status = $request->input('cmt_status');
         $cmt_product_id = $prdDetail;

         $cmt_prd = new Comment;
         $cmt_prd->comment_name = $cmt_name;
         $cmt_prd->comment = $comment;
         $cmt_prd->comment_status = $cmt_status;
         $cmt_prd->cmt_product_id = $cmt_product_id;
         $cmt_prd->save();

         return view('admin.all_comments');
    }
}
