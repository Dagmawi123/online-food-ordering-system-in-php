<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use App\Models\Order;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    //render home page
    function index(){
        $popularFoods=[];
        $topDishes = DB::table('orders')
        ->select('FoodId', DB::raw('COUNT(*) as order_count'))
        ->groupBy('FoodId')
        ->orderBy('order_count', 'desc')
        ->take(3)
        ->get();
         
        foreach($topDishes as $dish){
            $food=Food::find($dish->FoodId);
array_push($popularFoods,$food);
        }
$Restaurants=Restaurant::all();
$categories=Category::all();
        return view('home',["foods"=>$popularFoods,"restaurants"=>$Restaurants,"categories"=>$categories]);
    }


    function orders(){
        $Orders=auth()->user()->orders()->get();
        // dd($Orders);
        return view('my_orders',['orders'=>$Orders]);
    }




function popularDish(Food $food){
$parentRestaurant=$food->restaurant;
$cart=session()->get('cart',[]);
// dd($cart);
if(isset($cart[$food->id])){
    $cart[$food->id]['quantity']=1;
    session()->put('cart',$cart);
}
else{

    $cart[$food->id]=['quantity'=>1,'food'=>$food];
    session()->put('cart',$cart);
}
return view('order',["restaurant"=>$parentRestaurant,"foods"=>[$food]]);
}

function exploreRestaurant(Restaurant $rest){
$foods=$rest->foods;//returns the foods associated with the restaurant
//dd($foods);
    return view('order',["restaurant"=>$rest,"foods"=>$foods]);
}


function checkout(){
    $totalprice=0;
$cart=session()->get('cart',[]);
if(count($cart)!=0){
    // dd($cart);
foreach($cart as $item){
    $totalprice+=$item['food']->price*$item['quantity'];
}
return view('checkout',['totalprice'=>$totalprice]);    
}
else
return back();

}

function cancel(Order $order){
$order->status='Cancelled';
$order->save();
return redirect()->route('orders');
}

function add(){
    $cart=session('cart');
    if(count($cart)!=0){
        foreach($cart as $item){
        $order=["FoodId"=>$item['food']->id
        ,"UserId"=>auth()->user()->id,
        "Quantity"=> $item['quantity'],
        "status"=>"On process",
        "Date"=>Date::now(),
        "Price"=>$item['food']->price*$item['quantity']        
        ];
        Order::create($order);
        }
        
    }

    return redirect()->route('index');
}

function all(){
 $orders=Order::all();
 return view('admin.allorders',['orders'=>$orders]);
}

function remove(Order $order){
$order->delete();
return redirect()->route('allOrders');
}

function view(Order $order){
    // $order=Order::find(2);
    // dd($order);
    return view('admin.vieworder',['order'=>$order]);
}

function dispatch(Order $order){
    $order->status='Delivered';
    $order->save();
    return redirect()->route('allOrders');
    }
    
}

