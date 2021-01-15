<?php

namespace App\Http\Controllers;
use Illuminate\Auth\Events\Validated;
use App\Models\category;
use Illuminate\Http\Request;
use Session;

class CategoryController extends Controller
{
    public function index(){
             return view('category.index');
    }
    public function welcome(){
        return view('index');
}




    public function create(){
        return view('category.create');
}
public function store(Request $request)
{
    $checkCategory=category::where("name",$request->name)->first();
    if ($checkCategory){

        return redirect()->back()->with("msg","already exist");
    }

    $category=new category;
    $category->name=$request->name;
    $category->save();
    $request->Session()->flash('cc', 'category is created');
    return redirect()->back();

    // The blog post is valid...

}
}
