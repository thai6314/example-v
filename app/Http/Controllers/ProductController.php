<?php

namespace App\Http\Controllers;

use App\Http\Requests\product\ProductPostRequest;
use App\Http\Requests\product\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('product/index',['products'=>$products]);
    }
    public function showFormAdd(){
        $categories = Category::all();
        return view('product/add',['categories'=>$categories]);
    }
    public function add(ProductPostRequest $request){
        $validated = $request->validated();
        Product::create($validated);
        return redirect()->route('product.index');
    }

    public function showFormUpdate($product_id){
        $product = Product::where('product_id',$product_id)->first();
        return view('product/update', ['product'=>$product]);
    }
    public function update(ProductUpdateRequest $request){
        $validated = $request->validated();
        Product::where('product_id',$request->get('product_id'))->update($validated);
        return redirect()->route('product.index');
    }
    public function delete($product_id){
        $product = Product::find($product_id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
