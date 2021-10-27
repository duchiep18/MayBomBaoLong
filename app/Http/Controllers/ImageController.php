<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use App\Models\ImageGallery;


class ImageController extends Controller
{
    public function getInsertImg(){

        return view('admin.gallery.imageInsert');
    }

    public function slidebannerIndex(Request $request){
        $query = ImageGallery::query();
        $Imgbykey = $request->input('keywordImg');
        $Imgbytype = $request->input('Imgbytype');

        if($Imgbykey){
            $query -> where('name_img', 'like', "%{$Imgbykey}%");
        }
        if($Imgbytype){
            $query -> where('type', 'like', "%{$Imgbytype}%");
        }
        $query->orderBy('id','desc')->get();
        $imgsSL_BN = $query->paginate(10);
        return view('admin.gallery.slide_bannerManage', compact('imgsSL_BN'));
    }
    public function storetImg(Request $request){
        $img_name = $request->input('img_name');
        $img_url = $request->input('img_url');
        $img_type = $request->input('img_type');

        $image = new ImageGallery;
        $image->name_img = $img_name;
        $image->url = $img_url;
        $image->type = $img_type;
        $image->save();
        return redirect()->route('getImgMng');
    }
    public function editImg($id){
        $imgEdit = ImageGallery::find($id);
        $imgsCount = ImageGallery::all();
        return view('admin.gallery.slide_bannerEdit',compact('imgEdit','imgsCount'));
    }
    public function updateImg($id,Request $request){
        $imageupdate = ImageGallery::find($id);
        $img_name = $request->input('img_name');
        $img_url = $request->input('img_url');
        $img_type = $request->input('img_type');

        $imageupdate->name_img = $img_name;
        $imageupdate->url = $img_url;
        $imageupdate->type = $img_type;
        $imageupdate->save();
        return redirect()->route('manage_slide_banner');
    }
    public function destroyImg($id){
        $imgdelete = ImageGallery::find($id);
        $imgdelete->delete();
        return redirect()->route('manage_slide_banner');
    }

}
