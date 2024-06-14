<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\AdminCode;
use App\Models\Food;
use App\Models\Order;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Validation\Rule;
use PHPUnit\Framework\Constraint\Count;

class AdminController extends Controller
{
    //
    function index(){
        return view('admin.login');
    }

    function authenticate(Request $request){
        $formData=$request->validate([
      'username' => ['required', 'min:3'],
            "password"=>["required"]
        ]);
        
        if(Auth::guard('admin')->attempt($formData)){
        $request->session()->regenerate();
        return redirect('/');
        }
        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ])->onlyInput('login');
        
        }

        function store(Request $request){
            // AdminCode $code=null;
            $formFields = $request->validate([
                'username' => ['required', 'min:3',  Rule::unique('admins', 'username')],
                'email' => ['required', 'email', Rule::unique('admins', 'email')],
                'password' => 'required|confirmed|min:4',
                'code' =>'required|min:5'
            ]);
             $code = AdminCode::where('code', $formFields['code'])->first();
        //    dd($code);
        if($code!=null){
            if($code->admin==null){

            $formFields['password']=bcrypt($formFields['password']);
            unset($formFields['code']);
            $formFields['codeId']=$code->id;
            $formFields['date']=Date::now();
             $user=Admin::create($formFields);
            //  dd($user);
            $request->session()->regenerate();
            Auth::guard('admin')->login($user);
            return redirect('/');
        }
        else{
            // dd($code->admin);
            return back()->withErrors(['code'=>"Code Already In Use"]);
        }
        

        }
        else{
            return back()->withErrors(['code'=>"Invalid Code Used!"]);
        }
        
            
        }

        function dashboard(){
$rest=Count(Restaurant::all());
$dishes=Count(Food::all());
$Customer=Count(User::all());
$orders=Count(Order::all());

            return view('admin.dashboard',
            ['NoOfRestaurants'=>$rest,
            'NoOfDishes'=>$dishes,
            'NoOfCustomers'=>$Customer,
            'NoOfOrders'=>$orders
        
        ]);
        }
        
        





}
