<?php

namespace App\Http\Controllers\Site\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $data['categories'] = Category::all()->toArray();

        return view('frontend/products/menu',$data);
    }
    public function menu($str){
        $data['categories'] = Category::all()->toArray();
        $data['allproducts'] = Category::where('slug',$str)
                                ->first()
                                ->product()
                                ->orderby('id','DESC')
                                ->paginate(3);
        // dd($data['allproducts']);
        $data['randomproducts'] = Category::where('slug','<>',$str)
                                ->first()
                                ->product()
                                ->orderBy('id','ASC')->limit(5)->get();
        // dd($data['randomproducts']); 
        return view('frontend/products/menu',$data);
    }
    public function menudefault(){
        $data['categories'] = Category::all()->toArray();
        $data['allproducts'] = Product::orderby('id','ASC')->paginate(10);
        $data['randomproducts'] = Product::orderby('id','DESC')->limit(5)->get();
        return view('frontend/products/menudefault',$data);
    }
}
