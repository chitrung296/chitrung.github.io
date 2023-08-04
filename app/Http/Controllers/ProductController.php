<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $data = Product::get();
        
        //return $data;
        return view('product-list',compact('data'));
    }
    public function add()
    {
        $category = Category::get();
        return view('product-add',compact('category'));
    }public function save(Request $request)
    {
       
        $pro = new Product();
        $pro->productID = $request->id;
        $pro->productName = $request->name;
        $pro->productPrice = $request->price;
        $pro->productImage = $request->image;
        $pro->productDetails = $request->details;
        $pro->catID = $request->category;
        $pro->save();
        return redirect()->back()->with('success', 'Product added successfully!');
    }

    public function delete($id)
    {
        Product::where('productID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Product deleted successfully');
    }
    public function edit($id)
    {
        $category = Category::get();
        $data = Product::where('productID', '=', $id)->first();
        return view('product-edit', compact('data', 'category'));
    }

    public function update(Request $request)
    {
        $img = $request->new_image == "" ? $request->old_image : $request->new_image;
        Product::where('productID', '=', $request->id)->update([
            'productName'=>$request->name,
            'productPrice'=>$request->price,
            'productImage'=>$img,
            'productDetails'=>$request->details,
            'catID'=>$request->category
        ]);
        return redirect()->back()->with('success', 'Product updated successfully!');
    }
}

