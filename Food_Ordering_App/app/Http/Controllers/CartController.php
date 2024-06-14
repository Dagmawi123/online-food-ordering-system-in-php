<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //add item
    function add(Request $request){

$cart=session()->get('cart',[]);
//dd($cart);
if(isset($cart[$request->id])){
    $cart[$request->id]['quantity']+=$request->quantity;
    session()->put('cart',$cart);
}
else{
    $food=Food::find($request->id);
    $cart[$request->id]=['quantity'=>$request->quantity,'food'=>$food];
    session()->put('cart',$cart);
}
//    dd($cart);  

return view('order');
}

function remove(Food $food){
    $cart=session()->get('cart',[]);
if(isset($cart[$food->id])){
    unset($cart[$food->id]);
    session()->put('cart',$cart);
}
return view('order');
}

}
