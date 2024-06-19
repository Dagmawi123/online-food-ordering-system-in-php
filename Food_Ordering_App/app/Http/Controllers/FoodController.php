<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class FoodController extends Controller
{
    //
function index(){
    $foods=Food::all();
    return view('admin.allfoods',['foods'=>$foods]);
}

function remove(Food $food){
$food->delete();
return redirect()->route('foods');
}


function edit(Food $food){
    $restaurants=Restaurant::all();
return view('admin.updatefood',['food'=>$food,'restaurants'=>$restaurants]);
}

function update(Food $food,Request $request){

    $formFields = $request->validate([
        'title' => ['required', 'min:5'],
        'slogan'=> ['required','min:8'],
        "price"=>['required','min:2','regex:/^\d+(\.\d{1,2})?$/'],
        'image' => 'image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);
    //   dd($request);
    unset( $formFields['image']);
    if ($request->hasFile('image')) {
        $image=$request->file('image');
        $imgname=time().'-'.$image->getClientOriginalExtension();
        $formFields['image']=$imgname;
        $image->move(public_path('/images/Res_img/dishes'),$imgname);
        //public_path is a Laravel helper function that gets the fully qualified path to the public directory
    }
    $formFields['Rest_id']=$request['Rest_id'];
    // dd($formFields['Rest_id']);
    $food->update($formFields);
      
    return redirect()->route('foods');


}

function add(){
    $restaurants=Restaurant::all();
    return view('admin.addfood',['restaurants'=>$restaurants]);
    
}


function store(Request $request){
    $formFields = $request->validate([
        'title' => ['required', 'min:5'],
        'slogan'=> ['required','min:5'],
        'price'=> ['required','regex:/^\d+(\.\d{1,2})?$/'],
        'image' => 'required|image|mimes:jfif,jpeg,jpg,png,gif|max:2048',
        'Rest_id'=>'required'
        ]);
    //   dd($request);
    unset( $formFields['image']);
        $image=$request->file('image');
        $imgname=time().'-'.$image->getClientOriginalExtension();
        $formFields['image']=$imgname;
        $image->move(public_path('/images/Res_img/dishes'),$imgname);
        //public_path is a Laravel helper function that gets the fully qualified path to the public directory
        // $formFields['Cat_Id']=$request['Cat_Id'];
        Food::create($formFields);
        return redirect()->route('foods');
}


}
