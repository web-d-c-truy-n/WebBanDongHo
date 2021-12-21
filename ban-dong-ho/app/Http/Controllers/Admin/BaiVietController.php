<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\BaiViet;
use Illuminate\Support\Facades\Auth;

class BaiVietController extends Controller
{
    //
    public function themHoacSuaBaiViet(Request $request){
        $baiViet = $request->all();
        $baiViet["NGUOIDANG"] = Auth::user()->id;
        $baiViet["DADUYET"] = 1;
        unset($baiViet["_token"]);
        if(!empty($baiViet["id"]))
            BaiViet::where("id",$baiViet["id"])->update($baiViet);
        else
            BaiViet::create($baiViet);
        return response()->json(["kq"=>true]);
    }
    public function xoaBaiViet(Request $request){
        BaiViet::where("id",$request->id)->delete();
        return redirect()->back();
    }
}
