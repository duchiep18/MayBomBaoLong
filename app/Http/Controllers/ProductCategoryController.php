<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    //Route Categories Products
    //chuyển trang tạo danh mục
    public function create(){
        $query = ProductCategory::query();
        $categories_prd = $query->paginate(10);
        $prd_catgr = ProductCategory::where('category_parent',0)->orderby('id','DESC')->get();
        return view('admin.pages_danh_muc.ProductPages.createProductsCategories',compact('categories_prd','prd_catgr'));
    }

    //hàm tạo danh mục sản phẩm
    public function storeCat(Request $request){
        $prd_categories_name = $request->input('prd_cat_name');
        $prd_categories_url = $request -> input('url_prd_cat');
        $category_parent = $request -> input('prd_cat_parent');
        $prd_categories_desc = $request -> input('prd_cat_desc');
        $prd_categories_type = $request -> input('prd_cat_type');
        $product_catgr = new ProductCategory;
        $product_catgr->product_categories_name = $prd_categories_name;
        $product_catgr->url_prd_cat = $prd_categories_url;
        $product_catgr->category_parent = $category_parent;
        $product_catgr->product_categories_desc = $prd_categories_desc;
        $product_catgr->product_categories_type = $prd_categories_type;
        $product_catgr->save();
        return redirect()->route('products.create_catgr');
    }
    public function edit($id)
    {
        $categories_prd = ProductCategory::all();
        $prd_cat = ProductCategory::find($id);
        return view('admin.pages_danh_muc.ProductPages.editCategoriesPrd',compact('categories_prd','prd_cat'));
    }
    //update News Categoríe
    public function update($id, Request $request){
        $newCatsEdit = ProductCategory::find($id);
        $prd_categories_name = $request->input('prd_cat_name');
        $prd_categories_url = $request -> input('url_prd_cat');
        $category_parent = $request -> input('prd_cat_parent');
        $prd_categories_desc = $request -> input('prd_cat_desc');
        $prd_categories_type = $request -> input('prd_cat_type');

        $newCatsEdit->product_categories_name = $prd_categories_name;
        $newCatsEdit->url_prd_cat = $prd_categories_url;
        $newCatsEdit->category_parent = $category_parent;
        $newCatsEdit->product_categories_desc = $prd_categories_desc;
        $newCatsEdit->product_categories_type = $prd_categories_type;
        $newCatsEdit->save();
        return redirect()->route('products.create_catgr');
    }
    public function destroy($id)
    {
        $newCatsdelete = ProductCategory::find($id);
        $newCatsdelete->delete();
        return redirect()->route('products.create_catgr');
    }

    public function products($id){
        $category_products = ProductCategory::find($id);
        $products = $category_products->products()->paginate(5);
        return view('categories_news_and_products.categories_products', compact('products'));
    }

}
