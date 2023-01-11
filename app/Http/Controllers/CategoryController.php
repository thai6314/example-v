<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use App\Http\Requests\category\CategoryAddRequest;
class CategoryController
{

    public function index(){
        $categories = Category::all();
        return view('category/index', ['categories'=>$categories]);
    }
    public function showFormAdd(){
        return view('category/add');
    }
    public function add(CategoryAddRequest $request){
        $validated = $request->validated();

        Category::create($validated);
        return redirect()->route('category.index')->with(['message'=>"Add success"]);
    }
    public function showFormUpdate($category_id){
        $category = Category::where('category_id',$category_id)->first();
        return view('category/update',['category'=>$category]);
    }
    public function update(CategoryAddRequest $request){
        $validated = $request->validated();
        Category::where('category_id',$request->get('category_id'))->update($validated);
        return redirect()->route('category.index');
    }

    public function delete($category_id){
        $category = Category::find($category_id);
        if(empty(Product::find($category_id))){
            return redirect()->route('category.index')->with(['message'=>'Delete failed']);
        }else{
            $category->delete();
            return redirect()->route('category.index')->with(['message'=>'Delete success']);
        }

    }
}
