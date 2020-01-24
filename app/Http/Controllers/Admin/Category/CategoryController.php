<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Dotenv\Exception\ValidationException;

class CategoryController extends Controller
{
    //
    public function index(){

        return view('admin.category.show');
    }
    public function store(){
        $name = request('name');
        try{
            request()->validate(["name" => "required|unique:categories"]);
            Category::forceCreate(["name" => $name ,"slug" => Str::slug($name)]);
            return redirect()->back()->with("success","Category Created successfully");
        }catch (ValidationException $e){
            return redirect()->back()->with("errors",$e->getMessage());
        }
    }
    public function delete(Category $category){
        $category->delete();
        return redirect()->back()->with('success',"Deleted successfully");
    }
}
