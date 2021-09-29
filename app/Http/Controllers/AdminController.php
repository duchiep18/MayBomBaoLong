<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\products_categories;
use Illuminate\Http\Request;
use Session;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllPages()
    {
        return view('admin.pages_danh_muc.PagesOfWeb.allpages');
    }

    public function getCreatePage()
    {
        return view ('admin.pages_danh_muc.PagesOfWeb.createPage');
    }

    public function getAllOrders()
    {
        return view ('admin.pages_danh_muc.Orders.all_Orders');
    }
    public function getAllUsers()
    {
        return view('admin.pages_danh_muc.Users.all_Users');
    }
    public function createUser()
    {
        return view('admin.pages_danh_muc.Users.createUser');
    }
    public function profileUser()
    {
        return view('admin.pages_danh_muc.Users.profileUser');
    }
    public function getAllComments()
    {
        return view('admin.pages_danh_muc.all_comments');
    }
//    Đổ dl product ra home
//đổ dl ra trang Home
    public function getDatatHome(Request $request){
        $query = products::query();
        $products = $query->paginate(5);

        $categories_prd = products_categories::all();
        // $product = products::paginate(4);
        return view('client.page.home', compact('products','categories_prd'));

    }

}
