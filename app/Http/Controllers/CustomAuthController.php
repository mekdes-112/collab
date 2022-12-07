<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login(){
        return view("login");
    }
    public function registration(){
        return view("registration");
    }
    public function home(){
        return view("home");
    }
   public function registerUser(Request $request){
    // echo "$request->username"; 
    $request->validate([
        'username' =>['required','max:255'],
        'email' =>['required'],
        'password' =>['required','min:6'],
        'cpassword' =>['required','min:6'],
    ]);
    $user = new User();
    $user->name=$request->username;
    $user->email=$request->email;
    $user->password=Hash::make($request->password);
    $res=$user->save();
    if ($res) {
        return back()->with('success','You have registered successfully.');
    }
    else{
        return back()->with('fail','Something went wrong.');
    }
   }
   public function loginuser(Request $request){
    $request->validate([
        'email' =>['required'],
        'password' =>['required','min:6'],
    ]);
    $user = User::where('email','=', $request->email)->first();
    // $pw =;
    $naol = Hash::check($request->password, $user->password);
    if($user){
        if($naol){
            $request->session()->put('loginId',$user->id);
            return redirect('dashboard');

        }else{
            

            return back()->with('fail','Password doesnot match.');
            
        }

    }else{
        return back()->with('fail','This email is not registered.');
    }
   }
   public function dashboard(){
    return "Welcome to the dashboard.";
   }
}