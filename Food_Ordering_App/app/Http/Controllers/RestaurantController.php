<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RestaurantController extends Controller
{
    //get the list of restaurants
public function restaurants(){
 
$restaurants=Restaurant::all();
// dd($restaurants);
return view('restaurants',['restaurants'=>$restaurants]);
    
}

function all(){
    $restaurants=Restaurant::all();
    return view('admin.allrestaurants',['restaurants'=>$restaurants]);
   
}
function remove(Restaurant $rest){
    $rest->delete();
    return redirect()->route('restaurants');
    }

function edit(Restaurant $rest){
    $categories=Category::all();
    return view('admin.updaterestaurant',["restaurant"=>$rest,'categories'=>$categories]);
}

function update(Restaurant $rest,Request $request){
    // dd($request);
    $formFields = $request->validate([
        'title' => ['required', 'min:5'],
        'website'=> ['required','min:8','URL'],
        'o_hr'=> ['required'],
        'c_hr'=> ['required'],
        'o_days'=> ['required'],
        'address'=> ['required','min:5'],
        'email' => ['required', 'email', Rule::unique('restaurants', 'email')->ignore($rest->id)],
        "phone"=>['required','min:5','max:10'],
        'image' => 'image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);
    //   dd($request);
    unset( $formFields['image']);
    if ($request->hasFile('image')) {
        $image=$request->file('image');
        $imgname=time().'-'.$image->getClientOriginalExtension();
        $formFields['image']=$imgname;
        $image->move(public_path('/images/Res_img'),$imgname);
        //public_path is a Laravel helper function that gets the fully qualified path to the public directory
    }
    $rest->update($formFields);
      
    return redirect()->route('restaurants');
}




}
