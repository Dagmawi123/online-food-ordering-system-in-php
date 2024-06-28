<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // render the signin page
function sign(){
    return view('login');
}

function authenticate(Request $request){
$formData=$request->validate([
    "uname"=>"required",
    "password"=>["required"]
]);

if(Auth()->attempt($formData)){
$request->session()->regenerate();
// dd(redirect()->intended());
return redirect()->intended()->with('success','Signed in successfully');
}
return back()->withErrors([
    'login' => 'The provided credentials do not match our records.',
])->onlyInput('login');

}


function register(){
    return view('registration');
}

function store(Request $request){
    $formFields = $request->validate([
        'uname' => ['required', 'min:3'],
        'fname'=> ['required','min:4'],
        'lname'=> ['required','min:4'],
        'email' => ['required', 'email', Rule::unique('users', 'email')],
        "phone"=>['required','regex:/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/'],
        'password' => 'required|confirmed|min:4',
        'address' =>'required|min:5'
    ]);

    $formFields['password']=bcrypt($formFields['password']);

   $user=User::create($formFields);
    $request->session()->regenerate();
    auth()->login($user);
    return redirect()->intended()->with('message', 'User created and logged in');
 
}

function logout(){
    if(auth()){
       session()->invalidate();
        session()->regenerateToken();
        auth()->logout();
    }
    return redirect('/');
}

function allUsers(){
    $users=User::all();
    return view('admin.allusers',['users'=>$users]);
}

function remove(User $user){
$user->delete();
return redirect()->route('users');
}
function edit(User $user){
return view('admin.updateusers',['user'=>$user]);
}

function update(User $user,Request $request){
    // dd($request);
    $formFields = $request->validate([
        'uname' => ['required', 'min:3'],
        'fname'=> ['required','min:4'],
        'lname'=> ['required','min:4'],
        'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($user->id)],
"phone"=>['required','regex:/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/']
        ]);
    //   dd($request);
    $user->update($formFields);
      
    return redirect()->route('users');
}


function add(){
    return view('admin.adduser');
}

function adminStore(Request $request){
    $formFields = $request->validate([
        'uname' => ['required', 'min:3'],
        'fname'=> ['required','min:4'],
        'lname'=> ['required','min:4'],
        'email' => ['required', 'email', Rule::unique('users', 'email')],
        "phone"=>['required','regex:/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/'],
        'password' => 'required|min:4',
        'address' =>'required|min:5'
    ]);

    $formFields['password']=bcrypt($formFields['password']);

   $user=User::create($formFields);
    // $request->session()->regenerate();
    // auth()->login($user);
    return redirect()->route('users');    
}







}


