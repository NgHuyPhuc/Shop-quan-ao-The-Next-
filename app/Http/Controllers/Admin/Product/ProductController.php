<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditProductRequest;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Slug\Slug;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $data['products'] = Product::orderby('id', 'DESC')->paginate(6);
        // dd($data['products']);
        return view('backend/products/listproduct',$data);
    }
    public function create()
    {
        $data['categories'] = Category::all()->toArray();
        return view("backend/products/addproduct", $data);
    }
    public function insert(ProductRequest $productRequest)
    {
        if($productRequest->hasFile('image')){
            $file = $productRequest->image;
            $fileExtension = $file->getClientOriginalExtension();
            $file->move("uploads", Slug::getSlug($productRequest->name) . "." . $fileExtension);
        }
        $product = new Product();
        $product->name = $productRequest->name;
        $product->category_id = $productRequest->category;
        $product->code = $productRequest->code;
        $product->slug = Slug::getSlug($productRequest->name);
        $product->info = $productRequest->info;
        $product->image = Slug::getSlug($productRequest->name) . "." . $fileExtension;
        $product->image2 = Slug::getSlug($productRequest->name) . "." . $fileExtension;
        $product->image3 = Slug::getSlug($productRequest->name) . "." . $fileExtension;
        $product->price = $productRequest->price;
        $product->featured = $productRequest->featured;
        $product->state = $productRequest->state;
        $product->describer = $productRequest->describer;
        $product->save();
        return redirect('/admin/product'); 
    }
    public function edit($id)
    {
        $data['product'] = Product::find($id);
        $data['categories'] = Category::all()->toArray();
        // dd($data['product']);
        return view('backend/products/editproduct',$data);
    }
    public function update(EditProductRequest $editProductRequest , $id)
    {
        $product = Product::find($id);
        if($editProductRequest->hasFile('image')){
            $file = $editProductRequest->image;
            $fileExtension = $file->getClientOriginalExtension();
            $file->move("uploads", Slug::getSlug($editProductRequest->name) . "." . $fileExtension);
            $product->image =  Slug::getSlug($editProductRequest->name). "." . $fileExtension;
            $product->image2 =  Slug::getSlug($editProductRequest->name). "." . $fileExtension;
            $product->image3 =  Slug::getSlug($editProductRequest->name). "." . $fileExtension;
        }
        $product->name = $editProductRequest->name;
        $product->category_id = $editProductRequest->category;
        $product->code = $editProductRequest->code;
        $product->slug = Slug::getSlug($editProductRequest->name);
        $product->info = $editProductRequest->info;
        $product->price = $editProductRequest->price;
        $product->featured = $editProductRequest->featured;
        $product->state = $editProductRequest->state;
        $product->describer = $editProductRequest->describer;
        $product->save();
        $editProductRequest->session()->flash("alert", "Đã sửa thành công");
        return redirect('/admin/product');
    }
    public function delete($id)
    {
        $delproduct = Product::find($id);
        // dd($delproduct);
        session()->flash('delname', $delproduct->Name);
        $delproduct->delete();

        session()->flash("alert", "Đã xóa thành công sản phẩm ");

        return redirect("/admin/product");
    }
}
