<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index(){
        $data['categories'] = Category::all()->toArray();

        $id = Category::where('name','=','new')->get()->toarray();
        $data['newshirts'] = Product::orderby('id','DESC')->where('category_id','=',$id[0]['id'])->limit(5)->get();
        
        $idsale = Category::where('name','=',"Random Sale")->get()->toarray();
        $data['randomsales'] = Product::orderby('id','DESC')->where('category_id','=',$idsale[0]['id'])->limit(5)->get();

        $idwibu = Category::where('name','=',"Wibu")->get()->toarray();
        $data['wibu'] = Product::orderby('id','DESC')->where('category_id','=',$idwibu[0]['id'])->limit(3)->get();

        $idgame = Category::where('name','=',"Game")->get()->toarray();
        $data['game'] = Product::orderby('id','DESC')->where('category_id','=',$idgame[0]['id'])->limit(8)->get();
        

        return view('/frontend/index',$data);
    }
    public function detail($str){
        // dd($str);
        $data['shirt'] = Product::where('Slug', $str)->get()->toarray();
        $data['categories'] = Category::all()->toArray();

        // dd($data['shirt'][0]);
        return view('/frontend/detail',$data);
    }
    public function menu($str){

    }
}
