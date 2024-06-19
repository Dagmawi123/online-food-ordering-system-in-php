<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    //
    function index(){
        $categories=Category::all();
        // dd($categories);
        return view('admin.addcategory',['categories'=>$categories]);
    }

    function add(Request $request){
        $formfields=$request->validate([
            'CategoryName'=>['required','min:5',Rule::unique('categories','CategoryName')]
        ]);
        $formfields['date']=Date::now();
     $cat=Category::create($formfields);
     return redirect()->route('categories');
    }

function edit(Category $cat){
return view('admin.updatecategory',['cat'=>$cat]);
}

    function update(Category $cat,Request $request){
        // dd($request);
        $formFields = $request->validate([
            'CategoryName'=>['min:5',Rule::unique('categories','CategoryName')->ignore($cat->id)]
                ]);
        //   dd($request);
        $cat->update($formFields);
          
        return redirect()->route('categories');
    }
    
    function remove(Category $cat){
        $cat->delete();
        return redirect()->route('categories');
        }

}

